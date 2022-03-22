<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioLibero extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioLibero';

    private static $has_one = [
        "EvenietQuia" => EvenietQuia::class
    ];

    private static $has_many = [
        "EvenietQuias" => EvenietQuia::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EvenietQuiaManys" => EvenietQuia::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}