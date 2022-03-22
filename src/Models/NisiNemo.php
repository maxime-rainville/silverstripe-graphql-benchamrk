<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NisiNemo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NisiNemo';

    private static $has_one = [
        "DolorumFugit" => DolorumFugit::class
    ];

    private static $has_many = [
        "DolorumFugits" => DolorumFugit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DolorumFugitManys" => DolorumFugit::class
    ];

    private static $extensions = [
        
    ];
}