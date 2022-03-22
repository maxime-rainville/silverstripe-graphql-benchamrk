<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateConsequatur';

    private static $has_one = [
        "CommodiPerferendis" => CommodiPerferendis::class
    ];

    private static $has_many = [
        "CommodiPerferendiss" => CommodiPerferendis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CommodiPerferendisManys" => CommodiPerferendis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}