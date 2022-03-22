<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioQui';

    private static $has_one = [
        "SuscipitPossimus" => SuscipitPossimus::class
    ];

    private static $has_many = [
        "SuscipitPossimuss" => SuscipitPossimus::class
    ];

    private static $many_many = [
        "SuscipitPossimusManys" => SuscipitPossimus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}