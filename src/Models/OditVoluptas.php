<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OditVoluptas extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OditVoluptas';

    private static $has_one = [
        "FugaVoluptates" => FugaVoluptates::class
    ];

    private static $has_many = [
        "FugaVoluptatess" => FugaVoluptates::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FugaVoluptatesManys" => FugaVoluptates::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}