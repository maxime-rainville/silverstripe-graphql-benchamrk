<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuodEaQui extends DataObject
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

    private static $table_name = 'QuodEaQui';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "EosVelitVero" => EosVelitVero::class,
        "AnimiQuiaEt" => AnimiQuiaEt::class,
        "QuodEaQui" => QuodEaQui::class,
        "AutDelectusQui" => AutDelectusQui::class,
        "SimiliqueNequeSit" => SimiliqueNequeSit::class
    ];

    private static $has_many = [
        "EosVelitVeros" => EosVelitVero::class,
        "AnimiQuiaEts" => AnimiQuiaEt::class,
        "QuodEaQuis" => QuodEaQui::class,
        "AutDelectusQuis" => AutDelectusQui::class,
        "SimiliqueNequeSits" => SimiliqueNequeSit::class
    ];
}