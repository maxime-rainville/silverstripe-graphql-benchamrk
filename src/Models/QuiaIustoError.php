<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaIustoError extends DataObject
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

    private static $table_name = 'QuiaIustoError';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "DucimusEnimRerum" => DucimusEnimRerum::class,
        "ConsequaturTemporeQuae" => ConsequaturTemporeQuae::class,
        "MaioresRemRepellendus" => MaioresRemRepellendus::class,
        "EsseEsseVeniam" => EsseEsseVeniam::class,
        "QuiaIustoError" => QuiaIustoError::class
    ];

    private static $has_many = [
        "DucimusEnimRerums" => DucimusEnimRerum::class,
        "ConsequaturTemporeQuaes" => ConsequaturTemporeQuae::class,
        "MaioresRemRepellenduss" => MaioresRemRepellendus::class,
        "EsseEsseVeniams" => EsseEsseVeniam::class,
        "QuiaIustoErrors" => QuiaIustoError::class
    ];
}