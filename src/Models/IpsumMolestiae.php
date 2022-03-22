<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IpsumMolestiae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IpsumMolestiae';

    private static $has_one = [
        "DoloremSit" => DoloremSit::class
    ];

    private static $has_many = [
        "DoloremSits" => DoloremSit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremSitManys" => DoloremSit::class
    ];

    private static $extensions = [
        
    ];
}