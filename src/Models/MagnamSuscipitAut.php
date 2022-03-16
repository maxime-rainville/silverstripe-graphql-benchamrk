<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagnamSuscipitAut extends DataObject
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

    private static $table_name = 'MagnamSuscipitAut';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "ProvidentExcepturiReiciendis" => ProvidentExcepturiReiciendis::class,
        "EstMaioresNihil" => EstMaioresNihil::class,
        "OfficiisMinimaVel" => OfficiisMinimaVel::class,
        "MagnamSuscipitAut" => MagnamSuscipitAut::class,
        "ReiciendisUtExplicabo" => ReiciendisUtExplicabo::class
    ];

    private static $has_many = [
        "ProvidentExcepturiReiciendiss" => ProvidentExcepturiReiciendis::class,
        "EstMaioresNihils" => EstMaioresNihil::class,
        "OfficiisMinimaVels" => OfficiisMinimaVel::class,
        "MagnamSuscipitAuts" => MagnamSuscipitAut::class,
        "ReiciendisUtExplicabos" => ReiciendisUtExplicabo::class
    ];
}