<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioItaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioItaque';

    private static $has_one = [
        "MolestiaeQuam" => MolestiaeQuam::class
    ];

    private static $has_many = [
        "MolestiaeQuams" => MolestiaeQuam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MolestiaeQuamManys" => MolestiaeQuam::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}