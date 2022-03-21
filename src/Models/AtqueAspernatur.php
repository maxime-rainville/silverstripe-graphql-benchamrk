<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AtqueAspernatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AtqueAspernatur';

    private static $has_one = [
        "EstSunt" => EstSunt::class
    ];

    private static $has_many = [
        "EstSunts" => EstSunt::class
    ];

    private static $many_many = [
        "EstSuntManys" => EstSunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}