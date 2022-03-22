<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutAutem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutAutem';

    private static $has_one = [
        "CumVeritatis" => CumVeritatis::class
    ];

    private static $has_many = [
        "CumVeritatiss" => CumVeritatis::class
    ];

    private static $many_many = [
        "CumVeritatisManys" => CumVeritatis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}