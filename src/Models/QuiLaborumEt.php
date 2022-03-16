<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiLaborumEt extends DataObject
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

    private static $table_name = 'QuiLaborumEt';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "NecessitatibusQuibusdamEa" => NecessitatibusQuibusdamEa::class,
        "QuiLaborumEt" => QuiLaborumEt::class,
        "CorruptiQuodConsequatur" => CorruptiQuodConsequatur::class,
        "QuidemPossimusDebitis" => QuidemPossimusDebitis::class,
        "NecessitatibusRepellatDolor" => NecessitatibusRepellatDolor::class
    ];

    private static $has_many = [
        "NecessitatibusQuibusdamEas" => NecessitatibusQuibusdamEa::class,
        "QuiLaborumEts" => QuiLaborumEt::class,
        "CorruptiQuodConsequaturs" => CorruptiQuodConsequatur::class,
        "QuidemPossimusDebitiss" => QuidemPossimusDebitis::class,
        "NecessitatibusRepellatDolors" => NecessitatibusRepellatDolor::class
    ];
}