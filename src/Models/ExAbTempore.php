<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExAbTempore extends DataObject
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

    private static $table_name = 'ExAbTempore';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "FugiatEtQui" => FugiatEtQui::class,
        "IustoOditVitae" => IustoOditVitae::class,
        "NesciuntAccusantiumHarum" => NesciuntAccusantiumHarum::class,
        "ExAbTempore" => ExAbTempore::class,
        "EumExercitationemQuam" => EumExercitationemQuam::class
    ];

    private static $has_many = [
        "FugiatEtQuis" => FugiatEtQui::class,
        "IustoOditVitaes" => IustoOditVitae::class,
        "NesciuntAccusantiumHarums" => NesciuntAccusantiumHarum::class,
        "ExAbTempores" => ExAbTempore::class,
        "EumExercitationemQuams" => EumExercitationemQuam::class
    ];
}