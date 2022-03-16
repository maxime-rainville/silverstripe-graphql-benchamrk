<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporeNumquamIn extends DataObject
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

    private static $table_name = 'TemporeNumquamIn';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "RemOfficiisCupiditate" => RemOfficiisCupiditate::class,
        "NatusOfficiaNon" => NatusOfficiaNon::class,
        "RerumVitaeIncidunt" => RerumVitaeIncidunt::class,
        "ConsequaturAmetLaborum" => ConsequaturAmetLaborum::class,
        "TemporeNumquamIn" => TemporeNumquamIn::class
    ];

    private static $has_many = [
        "RemOfficiisCupiditates" => RemOfficiisCupiditate::class,
        "NatusOfficiaNons" => NatusOfficiaNon::class,
        "RerumVitaeIncidunts" => RerumVitaeIncidunt::class,
        "ConsequaturAmetLaborums" => ConsequaturAmetLaborum::class,
        "TemporeNumquamIns" => TemporeNumquamIn::class
    ];
}