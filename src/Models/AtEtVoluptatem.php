<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AtEtVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AtEtVoluptatem';

    private static $has_one = [
        "AtEtVoluptatem" => AtEtVoluptatem::class,
        "EaTemporaDicta" => EaTemporaDicta::class
    ];

    private static $has_many = [
        "AtEtVoluptatems" => AtEtVoluptatem::class,
        "EaTemporaDictas" => EaTemporaDicta::class
    ];
}