<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SitOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SitOfficia';

    private static $has_one = [
        "EaVoluptatem" => EaVoluptatem::class
    ];

    private static $has_many = [
        "EaVoluptatems" => EaVoluptatem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaVoluptatemManys" => EaVoluptatem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}