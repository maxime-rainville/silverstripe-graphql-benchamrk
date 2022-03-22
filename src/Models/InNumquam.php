<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InNumquam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InNumquam';

    private static $has_one = [
        "DoloremqueAutem" => DoloremqueAutem::class
    ];

    private static $has_many = [
        "DoloremqueAutems" => DoloremqueAutem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremqueAutemManys" => DoloremqueAutem::class
    ];

    private static $extensions = [
        
    ];
}