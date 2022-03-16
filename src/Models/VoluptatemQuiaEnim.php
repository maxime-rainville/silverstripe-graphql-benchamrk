<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemQuiaEnim extends DataObject
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

    private static $table_name = 'VoluptatemQuiaEnim';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "LiberoArchitectoSequi" => LiberoArchitectoSequi::class,
        "VoluptatemQuiaEnim" => VoluptatemQuiaEnim::class,
        "LaboreCorruptiAdipisci" => LaboreCorruptiAdipisci::class,
        "MaximeHicNemo" => MaximeHicNemo::class,
        "QuiaCulpaEum" => QuiaCulpaEum::class
    ];

    private static $has_many = [
        "LiberoArchitectoSequis" => LiberoArchitectoSequi::class,
        "VoluptatemQuiaEnims" => VoluptatemQuiaEnim::class,
        "LaboreCorruptiAdipiscis" => LaboreCorruptiAdipisci::class,
        "MaximeHicNemos" => MaximeHicNemo::class,
        "QuiaCulpaEums" => QuiaCulpaEum::class
    ];
}