<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SolutaOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SolutaOfficia';

    private static $has_one = [
        "RepellatDolorum" => RepellatDolorum::class
    ];

    private static $has_many = [
        "RepellatDolorums" => RepellatDolorum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "RepellatDolorumManys" => RepellatDolorum::class
    ];

    private static $extensions = [
        
    ];
}