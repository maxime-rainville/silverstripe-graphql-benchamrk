<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutCorporisConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutCorporisConsequatur';

    private static $has_one = [
        "AutCorporisConsequatur" => AutCorporisConsequatur::class,
        "MolestiasDoloremqueDolorum" => MolestiasDoloremqueDolorum::class
    ];

    private static $has_many = [
        "AutCorporisConsequaturs" => AutCorporisConsequatur::class,
        "MolestiasDoloremqueDolorums" => MolestiasDoloremqueDolorum::class
    ];
}