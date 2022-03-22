<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtHarum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtHarum';

    private static $has_one = [
        "SitOmnis" => SitOmnis::class
    ];

    private static $has_many = [
        "SitOmniss" => SitOmnis::class
    ];

    private static $many_many = [
        "SitOmnisManys" => SitOmnis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}