<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuosNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuosNisi';

    private static $has_one = [
        "InciduntDoloremque" => InciduntDoloremque::class
    ];

    private static $has_many = [
        "InciduntDoloremques" => InciduntDoloremque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "InciduntDoloremqueManys" => InciduntDoloremque::class
    ];

    private static $extensions = [
        
    ];
}