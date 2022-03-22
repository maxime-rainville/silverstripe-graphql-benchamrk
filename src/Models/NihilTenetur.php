<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilTenetur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilTenetur';

    private static $has_one = [
        "ReiciendisReprehenderit" => ReiciendisReprehenderit::class
    ];

    private static $has_many = [
        "ReiciendisReprehenderits" => ReiciendisReprehenderit::class
    ];

    private static $many_many = [
        "ReiciendisReprehenderitManys" => ReiciendisReprehenderit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}