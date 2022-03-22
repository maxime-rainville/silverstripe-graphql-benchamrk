<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RationeEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RationeEst';

    private static $has_one = [
        "SedConsequuntur" => SedConsequuntur::class
    ];

    private static $has_many = [
        "SedConsequunturs" => SedConsequuntur::class
    ];

    private static $many_many = [
        "SedConsequunturManys" => SedConsequuntur::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}