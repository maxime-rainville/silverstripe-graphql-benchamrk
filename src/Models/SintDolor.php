<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SintDolor extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SintDolor';

    private static $has_one = [
        "VoluptatemEum" => VoluptatemEum::class
    ];

    private static $has_many = [
        "VoluptatemEums" => VoluptatemEum::class
    ];

    private static $many_many = [
        "VoluptatemEumManys" => VoluptatemEum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}