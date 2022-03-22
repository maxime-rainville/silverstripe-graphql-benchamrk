<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatemAt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatemAt';

    private static $has_one = [
        "LaboriosamDignissimos" => LaboriosamDignissimos::class
    ];

    private static $has_many = [
        "LaboriosamDignissimoss" => LaboriosamDignissimos::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaboriosamDignissimosManys" => LaboriosamDignissimos::class
    ];

    private static $extensions = [
        
    ];
}