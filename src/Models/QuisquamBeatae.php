<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamBeatae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamBeatae';

    private static $has_one = [
        "LaboriosamConsequuntur" => LaboriosamConsequuntur::class
    ];

    private static $has_many = [
        "LaboriosamConsequunturs" => LaboriosamConsequuntur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaboriosamConsequunturManys" => LaboriosamConsequuntur::class
    ];

    private static $extensions = [
        
    ];
}