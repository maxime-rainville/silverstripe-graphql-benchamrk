<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerferendisCum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PerferendisCum';

    private static $has_one = [
        "AutAd" => AutAd::class
    ];

    private static $has_many = [
        "AutAds" => AutAd::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutAdManys" => AutAd::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}