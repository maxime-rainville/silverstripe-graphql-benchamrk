<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VitaeDolorum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VitaeDolorum';

    private static $has_one = [
        "SedAb" => SedAb::class
    ];

    private static $has_many = [
        "SedAbs" => SedAb::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "SedAbManys" => SedAb::class
    ];

    private static $extensions = [
        
    ];
}