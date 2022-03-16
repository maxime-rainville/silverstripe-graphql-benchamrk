<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtCommodiExercitationem extends DataObject
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

    private static $table_name = 'EtCommodiExercitationem';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuiPerferendisError" => QuiPerferendisError::class,
        "RerumAspernaturEnim" => RerumAspernaturEnim::class,
        "NecessitatibusAliquamFugit" => NecessitatibusAliquamFugit::class,
        "DoloreEtEt" => DoloreEtEt::class,
        "EtCommodiExercitationem" => EtCommodiExercitationem::class
    ];

    private static $has_many = [
        "QuiPerferendisErrors" => QuiPerferendisError::class,
        "RerumAspernaturEnims" => RerumAspernaturEnim::class,
        "NecessitatibusAliquamFugits" => NecessitatibusAliquamFugit::class,
        "DoloreEtEts" => DoloreEtEt::class,
        "EtCommodiExercitationems" => EtCommodiExercitationem::class
    ];
}