<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AssumendaAlias extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AssumendaAlias';

    private static $has_one = [
        "PerspiciatisQuo" => PerspiciatisQuo::class
    ];

    private static $has_many = [
        "PerspiciatisQuos" => PerspiciatisQuo::class
    ];

    private static $many_many = [
        "PerspiciatisQuoManys" => PerspiciatisQuo::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}