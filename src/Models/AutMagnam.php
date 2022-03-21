<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutMagnam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutMagnam';

    private static $has_one = [
        "InventoreNesciunt" => InventoreNesciunt::class
    ];

    private static $has_many = [
        "InventoreNesciunts" => InventoreNesciunt::class
    ];

    private static $many_many = [
        "InventoreNesciuntManys" => InventoreNesciunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}