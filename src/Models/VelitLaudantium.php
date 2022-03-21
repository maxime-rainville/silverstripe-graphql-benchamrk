<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitLaudantium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelitLaudantium';

    private static $has_one = [
        "OptioVoluptatem" => OptioVoluptatem::class
    ];

    private static $has_many = [
        "OptioVoluptatems" => OptioVoluptatem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OptioVoluptatemManys" => OptioVoluptatem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}