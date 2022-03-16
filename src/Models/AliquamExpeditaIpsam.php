<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AliquamExpeditaIpsam extends DataObject
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

    private static $table_name = 'AliquamExpeditaIpsam';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "IpsumAutHarum" => IpsumAutHarum::class,
        "VoluptatibusImpeditMagni" => VoluptatibusImpeditMagni::class,
        "EumCorporisEnim" => EumCorporisEnim::class,
        "AliquamExpeditaIpsam" => AliquamExpeditaIpsam::class,
        "AccusantiumRationeAdipisci" => AccusantiumRationeAdipisci::class
    ];

    private static $has_many = [
        "IpsumAutHarums" => IpsumAutHarum::class,
        "VoluptatibusImpeditMagnis" => VoluptatibusImpeditMagni::class,
        "EumCorporisEnims" => EumCorporisEnim::class,
        "AliquamExpeditaIpsams" => AliquamExpeditaIpsam::class,
        "AccusantiumRationeAdipiscis" => AccusantiumRationeAdipisci::class
    ];
}