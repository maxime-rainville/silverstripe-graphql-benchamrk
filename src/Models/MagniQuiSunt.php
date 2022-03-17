<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagniQuiSunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagniQuiSunt';

    private static $has_one = [
        "MagniQuiSunt" => MagniQuiSunt::class,
        "CorruptiAutEnim" => CorruptiAutEnim::class
    ];

    private static $has_many = [
        "MagniQuiSunts" => MagniQuiSunt::class,
        "CorruptiAutEnims" => CorruptiAutEnim::class
    ];
}