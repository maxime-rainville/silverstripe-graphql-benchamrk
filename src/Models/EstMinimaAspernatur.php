<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstMinimaAspernatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstMinimaAspernatur';

    private static $has_one = [
        "EstMinimaAspernatur" => EstMinimaAspernatur::class,
        "EaOccaecatiRepellat" => EaOccaecatiRepellat::class
    ];

    private static $has_many = [
        "EstMinimaAspernaturs" => EstMinimaAspernatur::class,
        "EaOccaecatiRepellats" => EaOccaecatiRepellat::class
    ];
}