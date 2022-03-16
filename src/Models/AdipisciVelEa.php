<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AdipisciVelEa extends DataObject
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

    private static $table_name = 'AdipisciVelEa';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AdipisciVelEa" => AdipisciVelEa::class,
        "PerferendisCumqueVoluptatibus" => PerferendisCumqueVoluptatibus::class,
        "AutAutMolestias" => AutAutMolestias::class,
        "ExPariaturExplicabo" => ExPariaturExplicabo::class,
        "EvenietSuscipitHic" => EvenietSuscipitHic::class
    ];

    private static $has_many = [
        "AdipisciVelEas" => AdipisciVelEa::class,
        "PerferendisCumqueVoluptatibuss" => PerferendisCumqueVoluptatibus::class,
        "AutAutMolestiass" => AutAutMolestias::class,
        "ExPariaturExplicabos" => ExPariaturExplicabo::class,
        "EvenietSuscipitHics" => EvenietSuscipitHic::class
    ];
}