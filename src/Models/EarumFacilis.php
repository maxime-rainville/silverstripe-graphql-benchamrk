<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EarumFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EarumFacilis';

    private static $has_one = [
        "NumquamQuia" => NumquamQuia::class
    ];

    private static $has_many = [
        "NumquamQuias" => NumquamQuia::class
    ];

    private static $many_many = [
        "NumquamQuiaManys" => NumquamQuia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}