<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VeniamTemporibus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VeniamTemporibus';

    private static $has_one = [
        "HarumLaborum" => HarumLaborum::class
    ];

    private static $has_many = [
        "HarumLaborums" => HarumLaborum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "HarumLaborumManys" => HarumLaborum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}