<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class BlanditiisFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'BlanditiisFacilis';

    private static $has_one = [
        "QuasiVoluptatum" => QuasiVoluptatum::class
    ];

    private static $has_many = [
        "QuasiVoluptatums" => QuasiVoluptatum::class
    ];

    private static $many_many = [
        "QuasiVoluptatumManys" => QuasiVoluptatum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}