<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NullaAutem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NullaAutem';

    private static $has_one = [
        "ExplicaboIn" => ExplicaboIn::class
    ];

    private static $has_many = [
        "ExplicaboIns" => ExplicaboIn::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ExplicaboInManys" => ExplicaboIn::class
    ];

    private static $extensions = [
        
    ];
}