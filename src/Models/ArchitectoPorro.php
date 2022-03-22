<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ArchitectoPorro extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ArchitectoPorro';

    private static $has_one = [
        "ExplicaboExcepturi" => ExplicaboExcepturi::class
    ];

    private static $has_many = [
        "ExplicaboExcepturis" => ExplicaboExcepturi::class
    ];

    private static $many_many = [
        "ExplicaboExcepturiManys" => ExplicaboExcepturi::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}