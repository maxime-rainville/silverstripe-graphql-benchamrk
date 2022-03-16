<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OmnisAutNemo extends DataObject
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

    private static $table_name = 'OmnisAutNemo';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DolorSitIusto" => DolorSitIusto::class,
        "DoloresSintSint" => DoloresSintSint::class,
        "OmnisAutNemo" => OmnisAutNemo::class,
        "EnimAutRerum" => EnimAutRerum::class,
        "EstVoluptatemOmnis" => EstVoluptatemOmnis::class
    ];

    private static $has_many = [
        "DolorSitIustos" => DolorSitIusto::class,
        "DoloresSintSints" => DoloresSintSint::class,
        "OmnisAutNemos" => OmnisAutNemo::class,
        "EnimAutRerums" => EnimAutRerum::class,
        "EstVoluptatemOmniss" => EstVoluptatemOmnis::class
    ];
}