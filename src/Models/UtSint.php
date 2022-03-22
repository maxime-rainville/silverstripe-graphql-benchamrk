<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtSint extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtSint';

    private static $has_one = [
        "OfficiaMagnam" => OfficiaMagnam::class
    ];

    private static $has_many = [
        "OfficiaMagnams" => OfficiaMagnam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OfficiaMagnamManys" => OfficiaMagnam::class
    ];

    private static $extensions = [
        
    ];
}