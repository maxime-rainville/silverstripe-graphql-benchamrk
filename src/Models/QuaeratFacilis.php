<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuaeratFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuaeratFacilis';

    private static $has_one = [
        "InInventore" => InInventore::class
    ];

    private static $has_many = [
        "InInventores" => InInventore::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InInventoreManys" => InInventore::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}