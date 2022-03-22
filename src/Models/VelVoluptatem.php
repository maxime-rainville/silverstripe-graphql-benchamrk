<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelVoluptatem';

    private static $has_one = [
        "SitOccaecati" => SitOccaecati::class
    ];

    private static $has_many = [
        "SitOccaecatis" => SitOccaecati::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "SitOccaecatiManys" => SitOccaecati::class
    ];

    private static $extensions = [
        
    ];
}