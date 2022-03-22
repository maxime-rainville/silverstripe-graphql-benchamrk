<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AccusamusIpsam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AccusamusIpsam';

    private static $has_one = [
        "HarumVoluptatem" => HarumVoluptatem::class
    ];

    private static $has_many = [
        "HarumVoluptatems" => HarumVoluptatem::class
    ];

    private static $many_many = [
        "HarumVoluptatemManys" => HarumVoluptatem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}