<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SintMaxime extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SintMaxime';

    private static $has_one = [
        "DoloremqueOfficiis" => DoloremqueOfficiis::class
    ];

    private static $has_many = [
        "DoloremqueOfficiiss" => DoloremqueOfficiis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremqueOfficiisManys" => DoloremqueOfficiis::class
    ];

    private static $extensions = [
        
    ];
}