<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutSed';

    private static $has_one = [
        "AliquidInventore" => AliquidInventore::class
    ];

    private static $has_many = [
        "AliquidInventores" => AliquidInventore::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AliquidInventoreManys" => AliquidInventore::class
    ];

    private static $extensions = [
        
    ];
}