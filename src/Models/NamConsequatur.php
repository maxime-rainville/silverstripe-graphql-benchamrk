<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NamConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NamConsequatur';

    private static $has_one = [
        "OdioIusto" => OdioIusto::class
    ];

    private static $has_many = [
        "OdioIustos" => OdioIusto::class
    ];

    private static $many_many = [
        "OdioIustoManys" => OdioIusto::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}