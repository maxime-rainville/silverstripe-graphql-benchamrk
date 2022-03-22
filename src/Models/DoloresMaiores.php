<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresMaiores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresMaiores';

    private static $has_one = [
        "NonIusto" => NonIusto::class
    ];

    private static $has_many = [
        "NonIustos" => NonIusto::class
    ];

    private static $many_many = [
        "NonIustoManys" => NonIusto::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}