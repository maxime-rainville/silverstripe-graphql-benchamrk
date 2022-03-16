<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtPlaceatFugit extends DataObject
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

    private static $table_name = 'UtPlaceatFugit';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuasiEumLibero" => QuasiEumLibero::class,
        "VeroEligendiTempora" => VeroEligendiTempora::class,
        "VoluptateQuibusdamAut" => VoluptateQuibusdamAut::class,
        "UtPlaceatFugit" => UtPlaceatFugit::class,
        "VoluptatumOditPlaceat" => VoluptatumOditPlaceat::class
    ];

    private static $has_many = [
        "QuasiEumLiberos" => QuasiEumLibero::class,
        "VeroEligendiTemporas" => VeroEligendiTempora::class,
        "VoluptateQuibusdamAuts" => VoluptateQuibusdamAut::class,
        "UtPlaceatFugits" => UtPlaceatFugit::class,
        "VoluptatumOditPlaceats" => VoluptatumOditPlaceat::class
    ];
}