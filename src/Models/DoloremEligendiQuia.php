<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremEligendiQuia extends DataObject
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

    private static $table_name = 'DoloremEligendiQuia';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DoloremEligendiQuia" => DoloremEligendiQuia::class,
        "DoloremSaepeNecessitatibus" => DoloremSaepeNecessitatibus::class,
        "EtEtId" => EtEtId::class,
        "SuscipitDucimusAt" => SuscipitDucimusAt::class,
        "ExplicaboErrorVoluptatem" => ExplicaboErrorVoluptatem::class
    ];

    private static $has_many = [
        "DoloremEligendiQuias" => DoloremEligendiQuia::class,
        "DoloremSaepeNecessitatibuss" => DoloremSaepeNecessitatibus::class,
        "EtEtIds" => EtEtId::class,
        "SuscipitDucimusAts" => SuscipitDucimusAt::class,
        "ExplicaboErrorVoluptatems" => ExplicaboErrorVoluptatem::class
    ];
}