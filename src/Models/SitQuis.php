<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SitQuis';

    private static $has_one = [
        "IureRerum" => IureRerum::class
    ];

    private static $has_many = [
        "IureRerums" => IureRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IureRerumManys" => IureRerum::class
    ];

    private static $extensions = [
        
    ];
}