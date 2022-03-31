<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IustoQuas extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IustoQuas';

    private static $has_one = [
        "MagniQuisquam" => MagniQuisquam::class
    ];

    private static $has_many = [
        "MagniQuisquams" => MagniQuisquam::class
    ];

    private static $many_many = [
        "MagniQuisquamManys" => MagniQuisquam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}