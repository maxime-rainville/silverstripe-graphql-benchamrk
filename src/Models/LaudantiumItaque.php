<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaudantiumItaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaudantiumItaque';

    private static $has_one = [
        "SuntAliquid" => SuntAliquid::class
    ];

    private static $has_many = [
        "SuntAliquids" => SuntAliquid::class
    ];

    private static $many_many = [
        "SuntAliquidManys" => SuntAliquid::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}