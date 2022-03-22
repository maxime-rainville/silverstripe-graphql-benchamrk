<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ErrorNulla extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ErrorNulla';

    private static $has_one = [
        "UllamOccaecati" => UllamOccaecati::class
    ];

    private static $has_many = [
        "UllamOccaecatis" => UllamOccaecati::class
    ];

    private static $many_many = [
        "UllamOccaecatiManys" => UllamOccaecati::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}