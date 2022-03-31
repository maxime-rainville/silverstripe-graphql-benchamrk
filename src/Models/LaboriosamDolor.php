<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaboriosamDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaboriosamDolor';

    private static $has_one = [
        "EstQuia" => EstQuia::class
    ];

    private static $has_many = [
        "EstQuias" => EstQuia::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstQuiaManys" => EstQuia::class
    ];

    private static $extensions = [
        
    ];
}