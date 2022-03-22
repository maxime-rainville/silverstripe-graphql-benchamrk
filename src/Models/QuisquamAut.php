<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamAut';

    private static $has_one = [
        "VoluptatibusError" => VoluptatibusError::class
    ];

    private static $has_many = [
        "VoluptatibusErrors" => VoluptatibusError::class
    ];

    private static $many_many = [
        "VoluptatibusErrorManys" => VoluptatibusError::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}