<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtAperiamQuia extends DataObject
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

    private static $table_name = 'EtAperiamQuia';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "TotamVoluptatemVeniam" => TotamVoluptatemVeniam::class,
        "CumqueIllumDolorum" => CumqueIllumDolorum::class,
        "MinimaDictaQuisquam" => MinimaDictaQuisquam::class,
        "EtAperiamQuia" => EtAperiamQuia::class,
        "RecusandaeExcepturiEt" => RecusandaeExcepturiEt::class
    ];

    private static $has_many = [
        "TotamVoluptatemVeniams" => TotamVoluptatemVeniam::class,
        "CumqueIllumDolorums" => CumqueIllumDolorum::class,
        "MinimaDictaQuisquams" => MinimaDictaQuisquam::class,
        "EtAperiamQuias" => EtAperiamQuia::class,
        "RecusandaeExcepturiEts" => RecusandaeExcepturiEt::class
    ];
}