<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TeneturAVoluptas extends DataObject
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

    private static $table_name = 'TeneturAVoluptas';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "TeneturAVoluptas" => TeneturAVoluptas::class,
        "EtVeniamMagnam" => EtVeniamMagnam::class,
        "EumNostrumCorrupti" => EumNostrumCorrupti::class,
        "QuidemEtMinima" => QuidemEtMinima::class,
        "ReprehenderitEtQui" => ReprehenderitEtQui::class
    ];

    private static $has_many = [
        "TeneturAVoluptass" => TeneturAVoluptas::class,
        "EtVeniamMagnams" => EtVeniamMagnam::class,
        "EumNostrumCorruptis" => EumNostrumCorrupti::class,
        "QuidemEtMinimas" => QuidemEtMinima::class,
        "ReprehenderitEtQuis" => ReprehenderitEtQui::class
    ];
}