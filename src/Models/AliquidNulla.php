<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AliquidNulla extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AliquidNulla';

    private static $has_one = [
        "AtqueNatus" => AtqueNatus::class
    ];

    private static $has_many = [
        "AtqueNatuss" => AtqueNatus::class
    ];

    private static $many_many = [
        "AtqueNatusManys" => AtqueNatus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}