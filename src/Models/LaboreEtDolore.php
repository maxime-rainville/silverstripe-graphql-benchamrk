<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaboreEtDolore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaboreEtDolore';

    private static $has_one = [
        "LaboreEtDolore" => LaboreEtDolore::class,
        "BlanditiisOditReiciendis" => BlanditiisOditReiciendis::class
    ];

    private static $has_many = [
        "LaboreEtDolores" => LaboreEtDolore::class,
        "BlanditiisOditReiciendiss" => BlanditiisOditReiciendis::class
    ];
}