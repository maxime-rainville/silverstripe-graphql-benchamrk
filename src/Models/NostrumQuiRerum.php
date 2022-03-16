<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NostrumQuiRerum extends DataObject
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

    private static $table_name = 'NostrumQuiRerum';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AccusamusVoluptatemCumque" => AccusamusVoluptatemCumque::class,
        "AccusamusAtquePariatur" => AccusamusAtquePariatur::class,
        "NostrumQuiRerum" => NostrumQuiRerum::class,
        "EtBlanditiisLaudantium" => EtBlanditiisLaudantium::class,
        "QuiVeroSimilique" => QuiVeroSimilique::class
    ];

    private static $has_many = [
        "AccusamusVoluptatemCumques" => AccusamusVoluptatemCumque::class,
        "AccusamusAtquePariaturs" => AccusamusAtquePariatur::class,
        "NostrumQuiRerums" => NostrumQuiRerum::class,
        "EtBlanditiisLaudantiums" => EtBlanditiisLaudantium::class,
        "QuiVeroSimiliques" => QuiVeroSimilique::class
    ];
}