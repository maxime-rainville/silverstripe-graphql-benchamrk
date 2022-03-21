<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioEligendi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioEligendi';

    private static $has_one = [
        "CommodiRatione" => CommodiRatione::class
    ];

    private static $has_many = [
        "CommodiRationes" => CommodiRatione::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CommodiRationeManys" => CommodiRatione::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}