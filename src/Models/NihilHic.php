<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilHic extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilHic';

    private static $has_one = [
        "VeroUnde" => VeroUnde::class
    ];

    private static $has_many = [
        "VeroUndes" => VeroUnde::class
    ];

    private static $many_many = [
        "VeroUndeManys" => VeroUnde::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}