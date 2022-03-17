<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatesEstEligendi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatesEstEligendi';

    private static $has_one = [
        "EstAdipisciEa" => EstAdipisciEa::class,
        "VoluptatesEstEligendi" => VoluptatesEstEligendi::class
    ];

    private static $has_many = [
        "EstAdipisciEas" => EstAdipisciEa::class,
        "VoluptatesEstEligendis" => VoluptatesEstEligendi::class
    ];
}