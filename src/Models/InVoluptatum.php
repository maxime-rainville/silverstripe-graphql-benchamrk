<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InVoluptatum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InVoluptatum';

    private static $has_one = [
        "VoluptasIpsam" => VoluptasIpsam::class
    ];

    private static $has_many = [
        "VoluptasIpsams" => VoluptasIpsam::class
    ];

    private static $many_many = [
        "VoluptasIpsamManys" => VoluptasIpsam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}