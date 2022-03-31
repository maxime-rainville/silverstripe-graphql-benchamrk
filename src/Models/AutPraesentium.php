<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutPraesentium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutPraesentium';

    private static $has_one = [
        "EstAut" => EstAut::class
    ];

    private static $has_many = [
        "EstAuts" => EstAut::class
    ];

    private static $many_many = [
        "EstAutManys" => EstAut::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}