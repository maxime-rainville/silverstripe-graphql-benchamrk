<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusNon';

    private static $has_one = [
        "QuodError" => QuodError::class
    ];

    private static $has_many = [
        "QuodErrors" => QuodError::class
    ];

    private static $many_many = [
        "QuodErrorManys" => QuodError::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}