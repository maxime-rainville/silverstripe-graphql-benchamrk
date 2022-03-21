<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusRerum';

    private static $has_one = [
        "RecusandaeQuia" => RecusandaeQuia::class
    ];

    private static $has_many = [
        "RecusandaeQuias" => RecusandaeQuia::class
    ];

    private static $many_many = [
        "RecusandaeQuiaManys" => RecusandaeQuia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}