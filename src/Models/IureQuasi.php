<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IureQuasi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IureQuasi';

    private static $has_one = [
        "EiusEum" => EiusEum::class
    ];

    private static $has_many = [
        "EiusEums" => EiusEum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EiusEumManys" => EiusEum::class
    ];

    private static $extensions = [
        
    ];
}