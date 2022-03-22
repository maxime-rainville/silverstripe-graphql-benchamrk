<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptateDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptateDolores';

    private static $has_one = [
        "RationeDucimus" => RationeDucimus::class
    ];

    private static $has_many = [
        "RationeDucimuss" => RationeDucimus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "RationeDucimusManys" => RationeDucimus::class
    ];

    private static $extensions = [
        
    ];
}