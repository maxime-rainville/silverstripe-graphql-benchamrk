<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EsseMagnam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EsseMagnam';

    private static $has_one = [
        "UtAut" => UtAut::class
    ];

    private static $has_many = [
        "UtAuts" => UtAut::class
    ];

    private static $many_many = [
        "UtAutManys" => UtAut::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}