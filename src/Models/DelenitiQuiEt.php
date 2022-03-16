<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DelenitiQuiEt extends DataObject
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

    private static $table_name = 'DelenitiQuiEt';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "ItaqueLaboreEt" => ItaqueLaboreEt::class,
        "QuiUtProvident" => QuiUtProvident::class,
        "ArchitectoLiberoDolor" => ArchitectoLiberoDolor::class,
        "DelenitiQuiEt" => DelenitiQuiEt::class,
        "NihilDoloremqueEaque" => NihilDoloremqueEaque::class
    ];

    private static $has_many = [
        "ItaqueLaboreEts" => ItaqueLaboreEt::class,
        "QuiUtProvidents" => QuiUtProvident::class,
        "ArchitectoLiberoDolors" => ArchitectoLiberoDolor::class,
        "DelenitiQuiEts" => DelenitiQuiEt::class,
        "NihilDoloremqueEaques" => NihilDoloremqueEaque::class
    ];
}