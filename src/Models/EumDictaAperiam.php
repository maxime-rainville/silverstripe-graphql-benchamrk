<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EumDictaAperiam extends DataObject
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

    private static $table_name = 'EumDictaAperiam';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "RerumAccusamusRem" => RerumAccusamusRem::class,
        "EumDictaAperiam" => EumDictaAperiam::class,
        "FugiatNamDebitis" => FugiatNamDebitis::class,
        "EiusSitReiciendis" => EiusSitReiciendis::class,
        "VoluptatumOmnisExplicabo" => VoluptatumOmnisExplicabo::class
    ];

    private static $has_many = [
        "RerumAccusamusRems" => RerumAccusamusRem::class,
        "EumDictaAperiams" => EumDictaAperiam::class,
        "FugiatNamDebitiss" => FugiatNamDebitis::class,
        "EiusSitReiciendiss" => EiusSitReiciendis::class,
        "VoluptatumOmnisExplicabos" => VoluptatumOmnisExplicabo::class
    ];
}