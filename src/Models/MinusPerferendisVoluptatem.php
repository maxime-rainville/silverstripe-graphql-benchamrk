<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MinusPerferendisVoluptatem extends DataObject
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

    private static $table_name = 'MinusPerferendisVoluptatem';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "MinusPerferendisVoluptatem" => MinusPerferendisVoluptatem::class,
        "CommodiArchitectoOptio" => CommodiArchitectoOptio::class,
        "VoluptatesEiusBeatae" => VoluptatesEiusBeatae::class,
        "EstOmnisQuidem" => EstOmnisQuidem::class,
        "CumAssumendaImpedit" => CumAssumendaImpedit::class
    ];

    private static $has_many = [
        "MinusPerferendisVoluptatems" => MinusPerferendisVoluptatem::class,
        "CommodiArchitectoOptios" => CommodiArchitectoOptio::class,
        "VoluptatesEiusBeataes" => VoluptatesEiusBeatae::class,
        "EstOmnisQuidems" => EstOmnisQuidem::class,
        "CumAssumendaImpedits" => CumAssumendaImpedit::class
    ];
}