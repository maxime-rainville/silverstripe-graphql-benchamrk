<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioVoluptatem';

    private static $has_one = [
        "VelitLaudantium" => VelitLaudantium::class
    ];

    private static $has_many = [
        "VelitLaudantiums" => VelitLaudantium::class
    ];

    private static $many_many = [
        "VelitLaudantiumManys" => VelitLaudantium::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}