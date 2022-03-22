<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DelectusError extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DelectusError';

    private static $has_one = [
        "QuiCumque" => QuiCumque::class
    ];

    private static $has_many = [
        "QuiCumques" => QuiCumque::class
    ];

    private static $many_many = [
        "QuiCumqueManys" => QuiCumque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}