<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioSedMolestiae extends DataObject
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

    private static $table_name = 'OptioSedMolestiae';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "OptioSedMolestiae" => OptioSedMolestiae::class,
        "InventoreQuodPerspiciatis" => InventoreQuodPerspiciatis::class,
        "EnimQuiQuas" => EnimQuiQuas::class,
        "InQuodQuisquam" => InQuodQuisquam::class,
        "IdVeniamEt" => IdVeniamEt::class
    ];

    private static $has_many = [
        "OptioSedMolestiaes" => OptioSedMolestiae::class,
        "InventoreQuodPerspiciatiss" => InventoreQuodPerspiciatis::class,
        "EnimQuiQuass" => EnimQuiQuas::class,
        "InQuodQuisquams" => InQuodQuisquam::class,
        "IdVeniamEts" => IdVeniamEt::class
    ];
}