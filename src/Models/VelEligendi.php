<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelEligendi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelEligendi';

    private static $has_one = [
        "EstQuis" => EstQuis::class
    ];

    private static $has_many = [
        "EstQuiss" => EstQuis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstQuisManys" => EstQuis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}