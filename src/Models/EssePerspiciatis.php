<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EssePerspiciatis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EssePerspiciatis';

    private static $has_one = [
        "RerumError" => RerumError::class
    ];

    private static $has_many = [
        "RerumErrors" => RerumError::class
    ];

    private static $many_many = [
        "RerumErrorManys" => RerumError::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}