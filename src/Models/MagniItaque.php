<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagniItaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagniItaque';

    private static $has_one = [
        "AVoluptate" => AVoluptate::class
    ];

    private static $has_many = [
        "AVoluptates" => AVoluptate::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AVoluptateManys" => AVoluptate::class
    ];

    private static $extensions = [
        
    ];
}