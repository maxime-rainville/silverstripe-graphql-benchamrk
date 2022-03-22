<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FugaVoluptates extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FugaVoluptates';

    private static $has_one = [
        "OditVoluptas" => OditVoluptas::class
    ];

    private static $has_many = [
        "OditVoluptass" => OditVoluptas::class
    ];

    private static $many_many = [
        "OditVoluptasManys" => OditVoluptas::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}