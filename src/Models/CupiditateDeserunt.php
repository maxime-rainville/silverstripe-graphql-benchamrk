<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateDeserunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateDeserunt';

    private static $has_one = [
        "AbHic" => AbHic::class
    ];

    private static $has_many = [
        "AbHics" => AbHic::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AbHicManys" => AbHic::class
    ];

    private static $extensions = [
        
    ];
}