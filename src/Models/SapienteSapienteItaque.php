<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SapienteSapienteItaque extends DataObject
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

    private static $table_name = 'SapienteSapienteItaque';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "CommodiQuoSit" => CommodiQuoSit::class,
        "AssumendaRationeEst" => AssumendaRationeEst::class,
        "DebitisAccusantiumConsequatur" => DebitisAccusantiumConsequatur::class,
        "SapienteSapienteItaque" => SapienteSapienteItaque::class,
        "RerumVoluptasNeque" => RerumVoluptasNeque::class
    ];

    private static $has_many = [
        "CommodiQuoSits" => CommodiQuoSit::class,
        "AssumendaRationeEsts" => AssumendaRationeEst::class,
        "DebitisAccusantiumConsequaturs" => DebitisAccusantiumConsequatur::class,
        "SapienteSapienteItaques" => SapienteSapienteItaque::class,
        "RerumVoluptasNeques" => RerumVoluptasNeque::class
    ];
}