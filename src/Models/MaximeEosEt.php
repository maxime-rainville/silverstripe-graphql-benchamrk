<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MaximeEosEt extends DataObject
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

    private static $table_name = 'MaximeEosEt';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "EumEligendiQuam" => EumEligendiQuam::class,
        "EstExpeditaQuis" => EstExpeditaQuis::class,
        "MaximeEosEt" => MaximeEosEt::class,
        "LaboriosamQuaeratEius" => LaboriosamQuaeratEius::class,
        "DoloremqueDoloremqueIllum" => DoloremqueDoloremqueIllum::class
    ];

    private static $has_many = [
        "EumEligendiQuams" => EumEligendiQuam::class,
        "EstExpeditaQuiss" => EstExpeditaQuis::class,
        "MaximeEosEts" => MaximeEosEt::class,
        "LaboriosamQuaeratEiuss" => LaboriosamQuaeratEius::class,
        "DoloremqueDoloremqueIllums" => DoloremqueDoloremqueIllum::class
    ];
}