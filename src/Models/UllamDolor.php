<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UllamDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UllamDolor';

    private static $has_one = [
        "MagnamVel" => MagnamVel::class
    ];

    private static $has_many = [
        "MagnamVels" => MagnamVel::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MagnamVelManys" => MagnamVel::class
    ];

    private static $extensions = [
        
    ];
}