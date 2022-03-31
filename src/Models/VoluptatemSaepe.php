<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemSaepe extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemSaepe';

    private static $has_one = [
        "PorroVelit" => PorroVelit::class
    ];

    private static $has_many = [
        "PorroVelits" => PorroVelit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "PorroVelitManys" => PorroVelit::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}