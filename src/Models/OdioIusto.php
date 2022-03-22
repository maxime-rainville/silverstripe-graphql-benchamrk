<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OdioIusto extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OdioIusto';

    private static $has_one = [
        "NamConsequatur" => NamConsequatur::class
    ];

    private static $has_many = [
        "NamConsequaturs" => NamConsequatur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NamConsequaturManys" => NamConsequatur::class
    ];

    private static $extensions = [
        
    ];
}