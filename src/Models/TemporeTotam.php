<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporeTotam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporeTotam';

    private static $has_one = [
        "EstAt" => EstAt::class
    ];

    private static $has_many = [
        "EstAts" => EstAt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstAtManys" => EstAt::class
    ];

    private static $extensions = [
        
    ];
}