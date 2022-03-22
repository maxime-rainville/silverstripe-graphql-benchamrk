<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuoSequi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuoSequi';

    private static $has_one = [
        "VelDolorem" => VelDolorem::class
    ];

    private static $has_many = [
        "VelDolorems" => VelDolorem::class
    ];

    private static $many_many = [
        "VelDoloremManys" => VelDolorem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}