<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisDeserunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisDeserunt';

    private static $has_one = [
        "EaAccusamus" => EaAccusamus::class
    ];

    private static $has_many = [
        "EaAccusamuss" => EaAccusamus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaAccusamusManys" => EaAccusamus::class
    ];

    private static $extensions = [
        
    ];
}