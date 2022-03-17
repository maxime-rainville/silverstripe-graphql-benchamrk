<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerferendisCupiditateIllo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PerferendisCupiditateIllo';

    private static $has_one = [
        "MollitiaDistinctioMagni" => MollitiaDistinctioMagni::class,
        "PerferendisCupiditateIllo" => PerferendisCupiditateIllo::class
    ];

    private static $has_many = [
        "MollitiaDistinctioMagnis" => MollitiaDistinctioMagni::class,
        "PerferendisCupiditateIllos" => PerferendisCupiditateIllo::class
    ];
}