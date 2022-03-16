<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutCupiditateDolore extends DataObject
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

    private static $table_name = 'AutCupiditateDolore';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "VoluptatumCorporisEligendi" => VoluptatumCorporisEligendi::class,
        "QuosIsteQui" => QuosIsteQui::class,
        "ALaboriosamSit" => ALaboriosamSit::class,
        "AutCupiditateDolore" => AutCupiditateDolore::class,
        "IureFugaOdio" => IureFugaOdio::class
    ];

    private static $has_many = [
        "VoluptatumCorporisEligendis" => VoluptatumCorporisEligendi::class,
        "QuosIsteQuis" => QuosIsteQui::class,
        "ALaboriosamSits" => ALaboriosamSit::class,
        "AutCupiditateDolores" => AutCupiditateDolore::class,
        "IureFugaOdios" => IureFugaOdio::class
    ];
}