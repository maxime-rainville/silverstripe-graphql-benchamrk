<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AliquamQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AliquamQui';

    private static $has_one = [
        "InEaque" => InEaque::class
    ];

    private static $has_many = [
        "InEaques" => InEaque::class
    ];

    private static $many_many = [
        "InEaqueManys" => InEaque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}