<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporaSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporaSed';

    private static $has_one = [
        "EstLaudantium" => EstLaudantium::class
    ];

    private static $has_many = [
        "EstLaudantiums" => EstLaudantium::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstLaudantiumManys" => EstLaudantium::class
    ];

    private static $extensions = [
        
    ];
}