<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ReiciendisReprehenderit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ReiciendisReprehenderit';

    private static $has_one = [
        "NihilTenetur" => NihilTenetur::class
    ];

    private static $has_many = [
        "NihilTeneturs" => NihilTenetur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NihilTeneturManys" => NihilTenetur::class
    ];

    private static $extensions = [
        
    ];
}