<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuasTempore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuasTempore';

    private static $has_one = [
        "VoluptatemArchitecto" => VoluptatemArchitecto::class
    ];

    private static $has_many = [
        "VoluptatemArchitectos" => VoluptatemArchitecto::class
    ];

    private static $many_many = [
        "VoluptatemArchitectoManys" => VoluptatemArchitecto::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}