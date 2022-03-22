<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SuntNecessitatibus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SuntNecessitatibus';

    private static $has_one = [
        "EaqueDolorum" => EaqueDolorum::class
    ];

    private static $has_many = [
        "EaqueDolorums" => EaqueDolorum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaqueDolorumManys" => EaqueDolorum::class
    ];

    private static $extensions = [
        
    ];
}