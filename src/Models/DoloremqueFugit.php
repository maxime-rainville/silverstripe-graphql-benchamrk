<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremqueFugit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremqueFugit';

    private static $has_one = [
        "IdCumque" => IdCumque::class
    ];

    private static $has_many = [
        "IdCumques" => IdCumque::class
    ];

    private static $many_many = [
        "IdCumqueManys" => IdCumque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}