<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InRerum';

    private static $has_one = [
        "ModiAutem" => ModiAutem::class
    ];

    private static $has_many = [
        "ModiAutems" => ModiAutem::class
    ];

    private static $many_many = [
        "ModiAutemManys" => ModiAutem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}