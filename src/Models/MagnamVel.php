<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagnamVel extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagnamVel';

    private static $has_one = [
        "UllamDolor" => UllamDolor::class
    ];

    private static $has_many = [
        "UllamDolors" => UllamDolor::class
    ];

    private static $many_many = [
        "UllamDolorManys" => UllamDolor::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}