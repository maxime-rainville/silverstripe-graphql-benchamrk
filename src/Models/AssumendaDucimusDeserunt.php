<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AssumendaDucimusDeserunt extends DataObject
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

    private static $table_name = 'AssumendaDucimusDeserunt';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuaeratUtVoluptas" => QuaeratUtVoluptas::class,
        "ExplicaboQuiMolestiae" => ExplicaboQuiMolestiae::class,
        "EtLaboreUt" => EtLaboreUt::class,
        "HicVoluptatumFugit" => HicVoluptatumFugit::class,
        "AssumendaDucimusDeserunt" => AssumendaDucimusDeserunt::class
    ];

    private static $has_many = [
        "QuaeratUtVoluptass" => QuaeratUtVoluptas::class,
        "ExplicaboQuiMolestiaes" => ExplicaboQuiMolestiae::class,
        "EtLaboreUts" => EtLaboreUt::class,
        "HicVoluptatumFugits" => HicVoluptatumFugit::class,
        "AssumendaDucimusDeserunts" => AssumendaDucimusDeserunt::class
    ];
}