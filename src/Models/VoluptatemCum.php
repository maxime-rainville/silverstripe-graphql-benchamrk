<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemCum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemCum';

    private static $has_one = [
        "DistinctioOccaecati" => DistinctioOccaecati::class
    ];

    private static $has_many = [
        "DistinctioOccaecatis" => DistinctioOccaecati::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DistinctioOccaecatiManys" => DistinctioOccaecati::class
    ];

    private static $extensions = [
        
    ];
}