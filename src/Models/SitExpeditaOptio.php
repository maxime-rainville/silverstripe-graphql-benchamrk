<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitExpeditaOptio extends DataObject
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

    private static $table_name = 'SitExpeditaOptio';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuiaAutEst" => QuiaAutEst::class,
        "NihilUtOfficia" => NihilUtOfficia::class,
        "EvenietPerferendisConsequatur" => EvenietPerferendisConsequatur::class,
        "SintQuoIure" => SintQuoIure::class,
        "SitExpeditaOptio" => SitExpeditaOptio::class
    ];

    private static $has_many = [
        "QuiaAutEsts" => QuiaAutEst::class,
        "NihilUtOfficias" => NihilUtOfficia::class,
        "EvenietPerferendisConsequaturs" => EvenietPerferendisConsequatur::class,
        "SintQuoIures" => SintQuoIure::class,
        "SitExpeditaOptios" => SitExpeditaOptio::class
    ];
}