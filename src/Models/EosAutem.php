<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosAutem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosAutem';

    private static $has_one = [
        "EumNam" => EumNam::class
    ];

    private static $has_many = [
        "EumNams" => EumNam::class
    ];

    private static $many_many = [
        "EumNamManys" => EumNam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}