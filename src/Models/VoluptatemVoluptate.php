<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemVoluptate extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemVoluptate';

    private static $has_one = [
        "MagniHic" => MagniHic::class
    ];

    private static $has_many = [
        "MagniHics" => MagniHic::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MagniHicManys" => MagniHic::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}