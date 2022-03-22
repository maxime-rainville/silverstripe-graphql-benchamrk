<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremVelit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremVelit';

    private static $has_one = [
        "SitCorporis" => SitCorporis::class
    ];

    private static $has_many = [
        "SitCorporiss" => SitCorporis::class
    ];

    private static $many_many = [
        "SitCorporisManys" => SitCorporis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}