<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ReprehenderitVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ReprehenderitVoluptatem';

    private static $has_one = [
        "EiusOdio" => EiusOdio::class
    ];

    private static $has_many = [
        "EiusOdios" => EiusOdio::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EiusOdioManys" => EiusOdio::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}