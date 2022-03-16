<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateUtFacere extends DataObject
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

    private static $table_name = 'CupiditateUtFacere';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AtqueErrorVoluptatem" => AtqueErrorVoluptatem::class,
        "EtSedCulpa" => EtSedCulpa::class,
        "CupiditateUtFacere" => CupiditateUtFacere::class,
        "DoloribusConsequaturTempore" => DoloribusConsequaturTempore::class,
        "AccusantiumDictaLabore" => AccusantiumDictaLabore::class
    ];

    private static $has_many = [
        "AtqueErrorVoluptatems" => AtqueErrorVoluptatem::class,
        "EtSedCulpas" => EtSedCulpa::class,
        "CupiditateUtFaceres" => CupiditateUtFacere::class,
        "DoloribusConsequaturTempores" => DoloribusConsequaturTempore::class,
        "AccusantiumDictaLabores" => AccusantiumDictaLabore::class
    ];
}