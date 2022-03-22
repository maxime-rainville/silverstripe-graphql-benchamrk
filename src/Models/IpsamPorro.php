<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IpsamPorro extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IpsamPorro';

    private static $has_one = [
        "MaioresQuisquam" => MaioresQuisquam::class
    ];

    private static $has_many = [
        "MaioresQuisquams" => MaioresQuisquam::class
    ];

    private static $many_many = [
        "MaioresQuisquamManys" => MaioresQuisquam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}