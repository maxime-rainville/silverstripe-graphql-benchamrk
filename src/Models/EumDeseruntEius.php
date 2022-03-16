<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EumDeseruntEius extends DataObject
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

    private static $table_name = 'EumDeseruntEius';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DoloremqueLaudantiumUt" => DoloremqueLaudantiumUt::class,
        "OfficiisNumquamSaepe" => OfficiisNumquamSaepe::class,
        "SitSedMolestiae" => SitSedMolestiae::class,
        "EumDeseruntEius" => EumDeseruntEius::class,
        "DignissimosAccusantiumAperiam" => DignissimosAccusantiumAperiam::class
    ];

    private static $has_many = [
        "DoloremqueLaudantiumUts" => DoloremqueLaudantiumUt::class,
        "OfficiisNumquamSaepes" => OfficiisNumquamSaepe::class,
        "SitSedMolestiaes" => SitSedMolestiae::class,
        "EumDeseruntEiuss" => EumDeseruntEius::class,
        "DignissimosAccusantiumAperiams" => DignissimosAccusantiumAperiam::class
    ];
}