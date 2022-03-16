<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerferendisEiusUllam extends DataObject
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

    private static $table_name = 'PerferendisEiusUllam';

    private static $extensions = [
        Versioned::class,
    ];

    private static $has_one = [
        "QuibusdamRepellatQui" => QuibusdamRepellatQui::class,
        "BeataeExcepturiRepellat" => BeataeExcepturiRepellat::class,
        "NonIsteVoluptatum" => NonIsteVoluptatum::class,
        "PerferendisEiusUllam" => PerferendisEiusUllam::class,
        "ErrorVoluptatesDeleniti" => ErrorVoluptatesDeleniti::class
    ];

    private static $has_many = [
        "QuibusdamRepellatQuis" => QuibusdamRepellatQui::class,
        "BeataeExcepturiRepellats" => BeataeExcepturiRepellat::class,
        "NonIsteVoluptatums" => NonIsteVoluptatum::class,
        "PerferendisEiusUllams" => PerferendisEiusUllam::class,
        "ErrorVoluptatesDelenitis" => ErrorVoluptatesDeleniti::class
    ];
}