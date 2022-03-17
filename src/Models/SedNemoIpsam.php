<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedNemoIpsam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedNemoIpsam';

    private static $has_one = [
        "MolestiaeArchitectoSunt" => MolestiaeArchitectoSunt::class,
        "SedNemoIpsam" => SedNemoIpsam::class
    ];

    private static $has_many = [
        "MolestiaeArchitectoSunts" => MolestiaeArchitectoSunt::class,
        "SedNemoIpsams" => SedNemoIpsam::class
    ];
}