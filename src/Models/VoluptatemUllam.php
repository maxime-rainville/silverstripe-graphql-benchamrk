<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemUllam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemUllam';

    private static $has_one = [
        "LaborumHarum" => LaborumHarum::class
    ];

    private static $has_many = [
        "LaborumHarums" => LaborumHarum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaborumHarumManys" => LaborumHarum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}