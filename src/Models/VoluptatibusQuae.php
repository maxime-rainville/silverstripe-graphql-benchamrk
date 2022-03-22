<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatibusQuae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatibusQuae';

    private static $has_one = [
        "InciduntNemo" => InciduntNemo::class
    ];

    private static $has_many = [
        "InciduntNemos" => InciduntNemo::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InciduntNemoManys" => InciduntNemo::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}