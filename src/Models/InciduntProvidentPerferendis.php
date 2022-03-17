<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InciduntProvidentPerferendis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InciduntProvidentPerferendis';

    private static $has_one = [
        "InciduntProvidentPerferendis" => InciduntProvidentPerferendis::class,
        "DoloremOccaecatiIure" => DoloremOccaecatiIure::class
    ];

    private static $has_many = [
        "InciduntProvidentPerferendiss" => InciduntProvidentPerferendis::class,
        "DoloremOccaecatiIures" => DoloremOccaecatiIure::class
    ];
}