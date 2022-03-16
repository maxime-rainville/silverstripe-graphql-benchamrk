<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OditEtNostrum extends DataObject
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

    private static $table_name = 'OditEtNostrum';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "OditEtNostrum" => OditEtNostrum::class,
        "EtDoloremAut" => EtDoloremAut::class,
        "QuiAperiamReiciendis" => QuiAperiamReiciendis::class,
        "DoloreNonQuos" => DoloreNonQuos::class,
        "CulpaSitEos" => CulpaSitEos::class
    ];

    private static $has_many = [
        "OditEtNostrums" => OditEtNostrum::class,
        "EtDoloremAuts" => EtDoloremAut::class,
        "QuiAperiamReiciendiss" => QuiAperiamReiciendis::class,
        "DoloreNonQuoss" => DoloreNonQuos::class,
        "CulpaSitEoss" => CulpaSitEos::class
    ];
}