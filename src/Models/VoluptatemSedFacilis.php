<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemSedFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemSedFacilis';

    private static $has_one = [
        "VoluptatemSedFacilis" => VoluptatemSedFacilis::class,
        "NostrumIdEligendi" => NostrumIdEligendi::class
    ];

    private static $has_many = [
        "VoluptatemSedFaciliss" => VoluptatemSedFacilis::class,
        "NostrumIdEligendis" => NostrumIdEligendi::class
    ];
}