<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequaturConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequaturConsequatur';

    private static $has_one = [
        "RerumVoluptatem" => RerumVoluptatem::class
    ];

    private static $has_many = [
        "RerumVoluptatems" => RerumVoluptatem::class
    ];

    private static $many_many = [
        "RerumVoluptatemManys" => RerumVoluptatem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}