<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IllumEaqueDolorum extends DataObject
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

    private static $table_name = 'IllumEaqueDolorum';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "CulpaVoluptasEst" => CulpaVoluptasEst::class,
        "CumqueAutSint" => CumqueAutSint::class,
        "OmnisNemoDicta" => OmnisNemoDicta::class,
        "SedVoluptatumTempora" => SedVoluptatumTempora::class,
        "IllumEaqueDolorum" => IllumEaqueDolorum::class
    ];

    private static $has_many = [
        "CulpaVoluptasEsts" => CulpaVoluptasEst::class,
        "CumqueAutSints" => CumqueAutSint::class,
        "OmnisNemoDictas" => OmnisNemoDicta::class,
        "SedVoluptatumTemporas" => SedVoluptatumTempora::class,
        "IllumEaqueDolorums" => IllumEaqueDolorum::class
    ];
}