<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloribusEosDolore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloribusEosDolore';

    private static $has_one = [
        "DoloribusEosDolore" => DoloribusEosDolore::class,
        "PorroMolestiasQuisquam" => PorroMolestiasQuisquam::class
    ];

    private static $has_many = [
        "DoloribusEosDolores" => DoloribusEosDolore::class,
        "PorroMolestiasQuisquams" => PorroMolestiasQuisquam::class
    ];
}