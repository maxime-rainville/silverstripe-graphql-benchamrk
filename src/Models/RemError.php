<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RemError extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RemError';

    private static $has_one = [
        "SapienteNobis" => SapienteNobis::class
    ];

    private static $has_many = [
        "SapienteNobiss" => SapienteNobis::class
    ];

    private static $many_many = [
        "SapienteNobisManys" => SapienteNobis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}