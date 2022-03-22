<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SapienteNobis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SapienteNobis';

    private static $has_one = [
        "RemError" => RemError::class
    ];

    private static $has_many = [
        "RemErrors" => RemError::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "RemErrorManys" => RemError::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}