<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutemRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutemRerum';

    private static $has_one = [
        "EstNon" => EstNon::class
    ];

    private static $has_many = [
        "EstNons" => EstNon::class
    ];

    private static $many_many = [
        "EstNonManys" => EstNon::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}