<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonOfficiaNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NonOfficiaNon';

    private static $has_one = [
        "BeataeTemporaEst" => BeataeTemporaEst::class,
        "NonOfficiaNon" => NonOfficiaNon::class
    ];

    private static $has_many = [
        "BeataeTemporaEsts" => BeataeTemporaEst::class,
        "NonOfficiaNons" => NonOfficiaNon::class
    ];
}