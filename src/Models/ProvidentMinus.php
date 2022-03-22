<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ProvidentMinus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ProvidentMinus';

    private static $has_one = [
        "NonFacere" => NonFacere::class
    ];

    private static $has_many = [
        "NonFaceres" => NonFacere::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NonFacereManys" => NonFacere::class
    ];

    private static $extensions = [
        
    ];
}