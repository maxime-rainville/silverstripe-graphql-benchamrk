<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaborumIusto extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaborumIusto';

    private static $has_one = [
        "DoloremVeniam" => DoloremVeniam::class
    ];

    private static $has_many = [
        "DoloremVeniams" => DoloremVeniam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremVeniamManys" => DoloremVeniam::class
    ];

    private static $extensions = [
        
    ];
}