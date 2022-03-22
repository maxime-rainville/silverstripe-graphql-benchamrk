<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemVoluptas extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemVoluptas';

    private static $has_one = [
        "VeniamIure" => VeniamIure::class
    ];

    private static $has_many = [
        "VeniamIures" => VeniamIure::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "VeniamIureManys" => VeniamIure::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}