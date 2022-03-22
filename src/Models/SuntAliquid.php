<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SuntAliquid extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SuntAliquid';

    private static $has_one = [
        "LaudantiumItaque" => LaudantiumItaque::class
    ];

    private static $has_many = [
        "LaudantiumItaques" => LaudantiumItaque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaudantiumItaqueManys" => LaudantiumItaque::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}