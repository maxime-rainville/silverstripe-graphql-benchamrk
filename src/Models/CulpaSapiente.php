<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CulpaSapiente extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CulpaSapiente';

    private static $has_one = [
        "PerferendisEos" => PerferendisEos::class
    ];

    private static $has_many = [
        "PerferendisEoss" => PerferendisEos::class
    ];

    private static $many_many = [
        "PerferendisEosManys" => PerferendisEos::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}