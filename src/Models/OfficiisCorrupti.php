<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiisCorrupti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiisCorrupti';

    private static $has_one = [
        "InventoreMaxime" => InventoreMaxime::class
    ];

    private static $has_many = [
        "InventoreMaximes" => InventoreMaxime::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InventoreMaximeManys" => InventoreMaxime::class
    ];

    private static $extensions = [
        
    ];
}