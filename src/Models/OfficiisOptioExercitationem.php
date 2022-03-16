<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiisOptioExercitationem extends DataObject
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

    private static $table_name = 'OfficiisOptioExercitationem';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "OfficiisOptioExercitationem" => OfficiisOptioExercitationem::class,
        "VelitNihilLaborum" => VelitNihilLaborum::class,
        "TemporeVelitEst" => TemporeVelitEst::class,
        "IdEvenietFacere" => IdEvenietFacere::class,
        "EtEsseA" => EtEsseA::class
    ];

    private static $has_many = [
        "OfficiisOptioExercitationems" => OfficiisOptioExercitationem::class,
        "VelitNihilLaborums" => VelitNihilLaborum::class,
        "TemporeVelitEsts" => TemporeVelitEst::class,
        "IdEvenietFaceres" => IdEvenietFacere::class,
        "EtEsseAs" => EtEsseA::class
    ];
}