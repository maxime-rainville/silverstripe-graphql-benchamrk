<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VeniamSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VeniamSed';

    private static $has_one = [
        "SintCommodi" => SintCommodi::class
    ];

    private static $has_many = [
        "SintCommodis" => SintCommodi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "SintCommodiManys" => SintCommodi::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}