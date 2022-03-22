<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatibusRecusandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatibusRecusandae';

    private static $has_one = [
        "IureLaborum" => IureLaborum::class
    ];

    private static $has_many = [
        "IureLaborums" => IureLaborum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IureLaborumManys" => IureLaborum::class
    ];

    private static $extensions = [
        
    ];
}