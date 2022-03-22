<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtNeque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtNeque';

    private static $has_one = [
        "AliquidIncidunt" => AliquidIncidunt::class
    ];

    private static $has_many = [
        "AliquidIncidunts" => AliquidIncidunt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AliquidInciduntManys" => AliquidIncidunt::class
    ];

    private static $extensions = [
        
    ];
}