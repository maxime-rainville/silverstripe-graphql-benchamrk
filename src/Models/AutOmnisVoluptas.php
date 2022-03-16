<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutOmnisVoluptas extends DataObject
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

    private static $table_name = 'AutOmnisVoluptas';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AutOmnisVoluptas" => AutOmnisVoluptas::class,
        "PorroAperiamOmnis" => PorroAperiamOmnis::class,
        "QuaeratInventoreVoluptatem" => QuaeratInventoreVoluptatem::class,
        "AnimiTemporaSapiente" => AnimiTemporaSapiente::class,
        "BlanditiisNonCupiditate" => BlanditiisNonCupiditate::class
    ];

    private static $has_many = [
        "AutOmnisVoluptass" => AutOmnisVoluptas::class,
        "PorroAperiamOmniss" => PorroAperiamOmnis::class,
        "QuaeratInventoreVoluptatems" => QuaeratInventoreVoluptatem::class,
        "AnimiTemporaSapientes" => AnimiTemporaSapiente::class,
        "BlanditiisNonCupiditates" => BlanditiisNonCupiditate::class
    ];
}