<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutQuoNon extends DataObject
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

    private static $table_name = 'AutQuoNon';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "SitInciduntVelit" => SitInciduntVelit::class,
        "PlaceatMolestiaeId" => PlaceatMolestiaeId::class,
        "EstOditNisi" => EstOditNisi::class,
        "SolutaEosMaxime" => SolutaEosMaxime::class,
        "AutQuoNon" => AutQuoNon::class
    ];

    private static $has_many = [
        "SitInciduntVelits" => SitInciduntVelit::class,
        "PlaceatMolestiaeIds" => PlaceatMolestiaeId::class,
        "EstOditNisis" => EstOditNisi::class,
        "SolutaEosMaximes" => SolutaEosMaxime::class,
        "AutQuoNons" => AutQuoNon::class
    ];
}