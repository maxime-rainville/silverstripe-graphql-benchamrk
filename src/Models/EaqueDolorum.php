<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EaqueDolorum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EaqueDolorum';

    private static $has_one = [
        "SuntNecessitatibus" => SuntNecessitatibus::class
    ];

    private static $has_many = [
        "SuntNecessitatibuss" => SuntNecessitatibus::class
    ];

    private static $many_many = [
        "SuntNecessitatibusManys" => SuntNecessitatibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}