<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PossimusEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PossimusEst';

    private static $has_one = [
        "NonPariatur" => NonPariatur::class
    ];

    private static $has_many = [
        "NonPariaturs" => NonPariatur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NonPariaturManys" => NonPariatur::class
    ];

    private static $extensions = [
        
    ];
}