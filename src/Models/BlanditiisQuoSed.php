<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class BlanditiisQuoSed extends DataObject
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

    private static $table_name = 'BlanditiisQuoSed';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "VoluptatemAmetDoloribus" => VoluptatemAmetDoloribus::class,
        "EtCommodiSimilique" => EtCommodiSimilique::class,
        "SapienteCupiditateInventore" => SapienteCupiditateInventore::class,
        "BlanditiisQuoSed" => BlanditiisQuoSed::class,
        "SapienteQuibusdamEst" => SapienteQuibusdamEst::class
    ];

    private static $has_many = [
        "VoluptatemAmetDoloribuss" => VoluptatemAmetDoloribus::class,
        "EtCommodiSimiliques" => EtCommodiSimilique::class,
        "SapienteCupiditateInventores" => SapienteCupiditateInventore::class,
        "BlanditiisQuoSeds" => BlanditiisQuoSed::class,
        "SapienteQuibusdamEsts" => SapienteQuibusdamEst::class
    ];
}