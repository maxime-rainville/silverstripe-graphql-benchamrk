<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusPariatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusPariatur';

    private static $has_one = [
        "UtQuae" => UtQuae::class
    ];

    private static $has_many = [
        "UtQuaes" => UtQuae::class
    ];

    private static $many_many = [
        "UtQuaeManys" => UtQuae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}