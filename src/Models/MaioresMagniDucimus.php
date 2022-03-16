<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MaioresMagniDucimus extends DataObject
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

    private static $table_name = 'MaioresMagniDucimus';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "NihilAsperioresQuis" => NihilAsperioresQuis::class,
        "MaioresMagniDucimus" => MaioresMagniDucimus::class,
        "AliquamEumRem" => AliquamEumRem::class,
        "TemporeUtAspernatur" => TemporeUtAspernatur::class,
        "AssumendaVeritatisVoluptatum" => AssumendaVeritatisVoluptatum::class
    ];

    private static $has_many = [
        "NihilAsperioresQuiss" => NihilAsperioresQuis::class,
        "MaioresMagniDucimuss" => MaioresMagniDucimus::class,
        "AliquamEumRems" => AliquamEumRem::class,
        "TemporeUtAspernaturs" => TemporeUtAspernatur::class,
        "AssumendaVeritatisVoluptatums" => AssumendaVeritatisVoluptatum::class
    ];
}