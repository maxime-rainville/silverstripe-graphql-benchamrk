<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DelectusDolorVeritatis extends DataObject
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

    private static $table_name = 'DelectusDolorVeritatis';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "UndeDoloresDoloribus" => UndeDoloresDoloribus::class,
        "VoluptatemRecusandaeEius" => VoluptatemRecusandaeEius::class,
        "DelectusDolorVeritatis" => DelectusDolorVeritatis::class,
        "RecusandaeOditAut" => RecusandaeOditAut::class,
        "VoluptasDolorumA" => VoluptasDolorumA::class
    ];

    private static $has_many = [
        "UndeDoloresDoloribuss" => UndeDoloresDoloribus::class,
        "VoluptatemRecusandaeEiuss" => VoluptatemRecusandaeEius::class,
        "DelectusDolorVeritatiss" => DelectusDolorVeritatis::class,
        "RecusandaeOditAuts" => RecusandaeOditAut::class,
        "VoluptasDolorumAs" => VoluptasDolorumA::class
    ];
}