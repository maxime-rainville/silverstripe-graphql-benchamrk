<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SolutaBeatae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SolutaBeatae';

    private static $has_one = [
        "PerferendisAliquam" => PerferendisAliquam::class
    ];

    private static $has_many = [
        "PerferendisAliquams" => PerferendisAliquam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "PerferendisAliquamManys" => PerferendisAliquam::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}