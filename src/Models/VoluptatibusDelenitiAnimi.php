<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatibusDelenitiAnimi extends DataObject
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

    private static $table_name = 'VoluptatibusDelenitiAnimi';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuiSitItaque" => QuiSitItaque::class,
        "VoluptatibusDelenitiAnimi" => VoluptatibusDelenitiAnimi::class,
        "EaEtIllum" => EaEtIllum::class,
        "NonOfficiaEst" => NonOfficiaEst::class,
        "QuamEtIn" => QuamEtIn::class
    ];

    private static $has_many = [
        "QuiSitItaques" => QuiSitItaque::class,
        "VoluptatibusDelenitiAnimis" => VoluptatibusDelenitiAnimi::class,
        "EaEtIllums" => EaEtIllum::class,
        "NonOfficiaEsts" => NonOfficiaEst::class,
        "QuamEtIns" => QuamEtIn::class
    ];
}