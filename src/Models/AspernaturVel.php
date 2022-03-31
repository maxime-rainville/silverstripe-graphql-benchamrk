<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AspernaturVel extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AspernaturVel';

    private static $has_one = [
        "OditConsequuntur" => OditConsequuntur::class
    ];

    private static $has_many = [
        "OditConsequunturs" => OditConsequuntur::class
    ];

    private static $many_many = [
        "OditConsequunturManys" => OditConsequuntur::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}