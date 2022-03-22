<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VeniamIure extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VeniamIure';

    private static $has_one = [
        "VoluptatemVoluptas" => VoluptatemVoluptas::class
    ];

    private static $has_many = [
        "VoluptatemVoluptass" => VoluptatemVoluptas::class
    ];

    private static $many_many = [
        "VoluptatemVoluptasManys" => VoluptatemVoluptas::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}