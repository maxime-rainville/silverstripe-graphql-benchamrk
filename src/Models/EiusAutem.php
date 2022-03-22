<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusAutem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusAutem';

    private static $has_one = [
        "SapienteVoluptatibus" => SapienteVoluptatibus::class
    ];

    private static $has_many = [
        "SapienteVoluptatibuss" => SapienteVoluptatibus::class
    ];

    private static $many_many = [
        "SapienteVoluptatibusManys" => SapienteVoluptatibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}