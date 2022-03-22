<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatePraesentium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatePraesentium';

    private static $has_one = [
        "EstDeleniti" => EstDeleniti::class
    ];

    private static $has_many = [
        "EstDelenitis" => EstDeleniti::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstDelenitiManys" => EstDeleniti::class
    ];

    private static $extensions = [
        
    ];
}