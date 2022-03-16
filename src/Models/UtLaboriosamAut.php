<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtLaboriosamAut extends DataObject
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

    private static $table_name = 'UtLaboriosamAut';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "AutAccusantiumPerspiciatis" => AutAccusantiumPerspiciatis::class,
        "TeneturCumReiciendis" => TeneturCumReiciendis::class,
        "TemporaExcepturiAspernatur" => TemporaExcepturiAspernatur::class,
        "VoluptatibusDoloribusUt" => VoluptatibusDoloribusUt::class,
        "UtLaboriosamAut" => UtLaboriosamAut::class
    ];

    private static $has_many = [
        "AutAccusantiumPerspiciatiss" => AutAccusantiumPerspiciatis::class,
        "TeneturCumReiciendiss" => TeneturCumReiciendis::class,
        "TemporaExcepturiAspernaturs" => TemporaExcepturiAspernatur::class,
        "VoluptatibusDoloribusUts" => VoluptatibusDoloribusUt::class,
        "UtLaboriosamAuts" => UtLaboriosamAut::class
    ];
}