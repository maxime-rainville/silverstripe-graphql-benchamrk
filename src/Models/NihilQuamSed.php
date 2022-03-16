<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilQuamSed extends DataObject
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

    private static $table_name = 'NihilQuamSed';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "SequiVoluptasAlias" => SequiVoluptasAlias::class,
        "VoluptateHarumId" => VoluptateHarumId::class,
        "MagnamNostrumEa" => MagnamNostrumEa::class,
        "NihilQuamSed" => NihilQuamSed::class,
        "QuisquamUtQuas" => QuisquamUtQuas::class
    ];

    private static $has_many = [
        "SequiVoluptasAliass" => SequiVoluptasAlias::class,
        "VoluptateHarumIds" => VoluptateHarumId::class,
        "MagnamNostrumEas" => MagnamNostrumEa::class,
        "NihilQuamSeds" => NihilQuamSed::class,
        "QuisquamUtQuass" => QuisquamUtQuas::class
    ];
}