<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitAdQuae extends DataObject
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

    private static $table_name = 'VelitAdQuae';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AsperioresRerumAccusantium" => AsperioresRerumAccusantium::class,
        "VelitAdQuae" => VelitAdQuae::class,
        "AliquamOptioLaboriosam" => AliquamOptioLaboriosam::class,
        "DolorEtQuo" => DolorEtQuo::class,
        "OccaecatiDistinctioQuas" => OccaecatiDistinctioQuas::class
    ];

    private static $has_many = [
        "AsperioresRerumAccusantiums" => AsperioresRerumAccusantium::class,
        "VelitAdQuaes" => VelitAdQuae::class,
        "AliquamOptioLaboriosams" => AliquamOptioLaboriosam::class,
        "DolorEtQuos" => DolorEtQuo::class,
        "OccaecatiDistinctioQuass" => OccaecatiDistinctioQuas::class
    ];
}