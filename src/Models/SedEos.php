<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedEos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedEos';

    private static $has_one = [
        "UtQuo" => UtQuo::class
    ];

    private static $has_many = [
        "UtQuos" => UtQuo::class
    ];

    private static $many_many = [
        "UtQuoManys" => UtQuo::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}