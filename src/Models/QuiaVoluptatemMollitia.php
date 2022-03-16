<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaVoluptatemMollitia extends DataObject
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

    private static $table_name = 'QuiaVoluptatemMollitia';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "IpsamProvidentDolorem" => IpsamProvidentDolorem::class,
        "OmnisConsequunturQuia" => OmnisConsequunturQuia::class,
        "EiusVeritatisImpedit" => EiusVeritatisImpedit::class,
        "QuiaVoluptatemMollitia" => QuiaVoluptatemMollitia::class,
        "CorruptiConsequaturCumque" => CorruptiConsequaturCumque::class
    ];

    private static $has_many = [
        "IpsamProvidentDolorems" => IpsamProvidentDolorem::class,
        "OmnisConsequunturQuias" => OmnisConsequunturQuia::class,
        "EiusVeritatisImpedits" => EiusVeritatisImpedit::class,
        "QuiaVoluptatemMollitias" => QuiaVoluptatemMollitia::class,
        "CorruptiConsequaturCumques" => CorruptiConsequaturCumque::class
    ];
}