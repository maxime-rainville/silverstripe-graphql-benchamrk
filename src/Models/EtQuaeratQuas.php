<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtQuaeratQuas extends DataObject
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

    private static $table_name = 'EtQuaeratQuas';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "EligendiQuisEligendi" => EligendiQuisEligendi::class,
        "EtQuaeratQuas" => EtQuaeratQuas::class,
        "OmnisQuisquamPlaceat" => OmnisQuisquamPlaceat::class,
        "NecessitatibusQuiaAut" => NecessitatibusQuiaAut::class,
        "MaioresAssumendaSint" => MaioresAssumendaSint::class
    ];

    private static $has_many = [
        "EligendiQuisEligendis" => EligendiQuisEligendi::class,
        "EtQuaeratQuass" => EtQuaeratQuas::class,
        "OmnisQuisquamPlaceats" => OmnisQuisquamPlaceat::class,
        "NecessitatibusQuiaAuts" => NecessitatibusQuiaAut::class,
        "MaioresAssumendaSints" => MaioresAssumendaSint::class
    ];
}