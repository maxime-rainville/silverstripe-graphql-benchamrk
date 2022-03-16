<?php
namespace MaximeRainville\SilverStripeGraphQLBenchmark\Tasks;

use SilverStripe\Dev\BuildTask;
use Faker\Factory;
use SilverStripe\Control\HTTPRequest;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use SilverStripe\Core\Manifest\ModuleLoader;
use Symfony\Component\Filesystem\Exception\IOException;

class SchemaCreatorTask extends BuildTask
{

    private static $schemas = [
        'tiny' => 5,
        'small' => 10,
        'medium' => 40,
        'big' => 100,
        'verybig' => 250,
        'gigantic' => 500,
    ];

    /**
     * @var \Faker\Factory
     */
    protected $faker;

    /**
     * @var Filesystem
     */
    protected $fs;

    /**
     * @var Finder
     */
    protected $finder;

    /**
     * FTPageTypeCreatorTask constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->fs = new Filesystem();
        $this->faker = Factory::create();
        $this->finder = new Finder();
    }

    /**
     * @param HTTPRequest $request
     */
    public function run($request)
    {
        $count = max(self::config()->get('schemas'));
        $module = ModuleLoader::getModule('maxime-rainville/silverstripe-graphql-benchmark');

        $siblings = $this->getSiblings($count);
        $siblingGroups = array_reduce($siblings, function ($carry, $sibling) {
            $index = sizeof($carry) - 1;
            if (sizeof($carry[$index]) > 4) {
                $carry[] = [];
                $index++;
            }
            $carry[$index][] = $sibling;
            return $carry;
        }, [[]]);

        $this->buildYml($module->getPath());

        foreach ($siblingGroups as $siblings) {
            $this->buildPhp($siblings, $module->getPath());
        }
        $this->buildSchemas($siblingGroups, $module->getPath());

    }

    private function getSiblings($count): array
    {
        $siblings = [];
        while (sizeof($siblings) < $count) {
            $siblings[] = $this->generateClassName();
            $siblings = array_unique($siblings);
        }
        return $siblings;
    }

    private function generateClassName()
    {
        return ucfirst($this->faker->word) . ucfirst($this->faker->word) . ucfirst($this->faker->word);
    }

    private function buildPhp($siblings, $modulePath) {
        $testPageDir = $modulePath . '/src/Models';
        if (!$this->fs->exists($testPageDir)) {
            throw new \RuntimeException("Test page directory $testPageDir does not exist!");
        }
        foreach ($siblings as $sibling) {
            $code = $this->generateClassCode($sibling, $siblings);
            $filePath = sprintf('%s/%s.php', $testPageDir, $sibling);
            try {
                $this->fs->dumpFile($filePath, $code);
            } catch (IOException $e) {
                echo "Could not write to file $filePath. Got error: {$e->getMessage()}\n";
                die();
            }
            echo "Created $sibling DataObject\n";
        }
    }

    private function generateClassCode($className, $siblings)
    {
        $self = __CLASS__;

        $hasones = implode(
            ",\n",
            array_map(function ($sibling) {
                return sprintf('        "%s" => %s::class', $sibling, $sibling);
            }, $siblings)
        );
        $hasmanys = implode(
            ",\n",
            array_map(function ($sibling) {
                return sprintf('        "%s" => %s::class', $sibling . 's', $sibling);
            }, $siblings)
        );

        $code = <<<PHP
<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by $self
 */
class $className extends DataObject
{

    private static \$db = [
        'AStringValue' => 'Varchar',
        'Numeric' => 'Int',
        'TrueOrFalse' => 'Boolean',
        'MyNovel' => 'Text',
        'MyNovelWithFormattedContent' => 'HTMLText',
        'ShowMeTheMoney' => 'Money',
        'ListOfThings' => 'Enum("USD,EUR,GBP,AUD,CAD,CHF,CNY,DKK,HKD,JPY,NZD,PLN,RUB,SEK,SGD,THB,ZAR")',
        'YourTimeWillCome' => 'Datetime',
        'SplintingNumber' => 'Decimal',
        'InTheYearOfThyLord' => 'Year',
    ];

    private static \$table_name = '$className';

    private static \$extensions = [
        Versioned::class,
    ];

    private static \$has_one = [
$hasones
    ];

    private static \$has_many = [
$hasmanys
    ];
}
PHP;
        return $code;
    }

    private function buildYml($modulePath) {
        $configPath = $modulePath . '/_config/graphql.yml';
        if ($this->fs->exists($configPath)) {
            throw new \RuntimeException("$configPath already exists!");
        }

        $schemas = self::config()->get('schemas');
        $injectorDef = '';
        $directorRules = '';
        $schemaSrc = '';

        foreach ($schemas as $schemaKey => $size) {
            $injectorDef .= <<<YML
  SilverStripe\\GraphQL\\Schema\\Schema.$schemaKey:
    class: SilverStripe\\GraphQL\\Schema\\Schema
    constructor:
      schemaKey: $schemaKey
  SilverStripe\\GraphQL\\Controller.$schemaKey:
    class: SilverStripe\\GraphQL\\Controller
    constructor:
      schema: $schemaKey

YML;
            $directorRules .= "    '$schemaKey/graphql': '%\$SilverStripe\\GraphQL\\Controller.$schemaKey'\n";
            $schemaSrc .= <<<YML
    $schemaKey:
      src:
        - 'maxime-rainville/silverstripe-graphql-benchmark: _graphql/$schemaKey'

YML;
        }

        $ymlCode = <<<YML
---
Name: graphql-benchmark
After: '#graphqlconfig'
Only:
    classexists: 'SilverStripe\GraphQL\Schema\Schema'
---

SilverStripe\Core\Injector\Injector:
$injectorDef

SilverStripe\Control\Director:
  rules:
$directorRules
SilverStripe\GraphQL\Schema\Schema:
  schemas:
$schemaSrc

YML;
        try {
            $this->fs->dumpFile($configPath, $ymlCode);
        } catch (IOException $e) {
            echo "Could not write to file $configPath. Got error: {$e->getMessage()}\n";
            die();
        }
    }

    private function buildSchemas($siblingGroups, $modulePath)
    {
        $configPath = $modulePath . '/_graphql/';
        if (!$this->fs->exists($configPath)) {
            throw new \RuntimeException("$configPath does not exist!");
        }

        $schemas = self::config()->get('schemas');
        foreach ($schemas as $schemaKey => $size) {
            try {
                $ymlCode = "models:\n";
                foreach ($siblingGroups as $siblings) {
                    if ($size > sizeof($siblings)) {
                        $ymlCode .= $this->buildOneSchema($siblings);
                        $size -= sizeof($siblings);
                    } else {
                        $ymlCode .= $this->buildOneSchema(array_slice($siblings, 0, $size));
                        break;
                    }
                }

                $schemaPath = $configPath . DIRECTORY_SEPARATOR . $schemaKey;
                $this->fs->mkdir($schemaPath);
                $this->fs->dumpFile($schemaPath . DIRECTORY_SEPARATOR . 'schema.yml', $ymlCode);
            } catch (IOException $e) {
                echo "Could not write to file $configPath. Got error: {$e->getMessage()}\n";
                die();
            }
        }
    }

    private function buildOneSchema(array $siblings)
    {
        $yml = "";
        $fieldsYml = '';

        foreach ($siblings as $sibling) {
            $do = lcfirst($sibling);
            $fieldsYml .= "      $do: true\n      {$do}s: true\n";
        }

        foreach ($siblings as $sibling) {
            $yml .= <<<YML
  MaximeRainville\\SilverStripeGraphQLBenchmark\\Models\\$sibling:
    operations: '*'
    fields:
      id: true
      aStringValue: true
      numeric: true
      trueOrFalse: true
      myNovel: true
      myNovelWithFormattedContent: true
      showMeTheMoney: true
      listOfThings: true
      yourTimeWillCome: true
      splintingNumber: true
      inTheYearOfThyLord: true
$fieldsYml
YML;
        }
        return $yml;
    }

}
