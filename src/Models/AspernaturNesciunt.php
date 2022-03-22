<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AspernaturNesciunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AspernaturNesciunt';

    private static $has_one = [
        "EstIure" => EstIure::class
    ];

    private static $has_many = [
        "EstIures" => EstIure::class
    ];

    private static $many_many = [
        "EstIureManys" => EstIure::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}