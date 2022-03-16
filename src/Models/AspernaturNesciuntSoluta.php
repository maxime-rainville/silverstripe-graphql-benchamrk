<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AspernaturNesciuntSoluta extends DataObject
{

    private static $db = [
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

    private static $table_name = 'AspernaturNesciuntSoluta';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DebitisVoluptatibusIusto" => DebitisVoluptatibusIusto::class,
        "SuntQuiaUt" => SuntQuiaUt::class,
        "AspernaturNesciuntSoluta" => AspernaturNesciuntSoluta::class,
        "AnimiVoluptateIpsa" => AnimiVoluptateIpsa::class,
        "AspernaturEtSapiente" => AspernaturEtSapiente::class
    ];

    private static $has_many = [
        "DebitisVoluptatibusIustos" => DebitisVoluptatibusIusto::class,
        "SuntQuiaUts" => SuntQuiaUt::class,
        "AspernaturNesciuntSolutas" => AspernaturNesciuntSoluta::class,
        "AnimiVoluptateIpsas" => AnimiVoluptateIpsa::class,
        "AspernaturEtSapientes" => AspernaturEtSapiente::class
    ];
}