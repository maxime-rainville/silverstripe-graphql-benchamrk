<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptasQuaeDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptasQuaeDolor';

    private static $has_one = [
        "ReiciendisDistinctioNon" => ReiciendisDistinctioNon::class,
        "VoluptasQuaeDolor" => VoluptasQuaeDolor::class
    ];

    private static $has_many = [
        "ReiciendisDistinctioNons" => ReiciendisDistinctioNon::class,
        "VoluptasQuaeDolors" => VoluptasQuaeDolor::class
    ];
}