<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiisTempora extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiisTempora';

    private static $has_one = [
        "EumEius" => EumEius::class
    ];

    private static $has_many = [
        "EumEiuss" => EumEius::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EumEiusManys" => EumEius::class
    ];

    private static $extensions = [
        
    ];
}