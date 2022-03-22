<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitRepudiandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelitRepudiandae';

    private static $has_one = [
        "OptioUllam" => OptioUllam::class
    ];

    private static $has_many = [
        "OptioUllams" => OptioUllam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OptioUllamManys" => OptioUllam::class
    ];

    private static $extensions = [
        
    ];
}