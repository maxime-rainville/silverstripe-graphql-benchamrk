<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutAd extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutAd';

    private static $has_one = [
        "PerferendisCum" => PerferendisCum::class
    ];

    private static $has_many = [
        "PerferendisCums" => PerferendisCum::class
    ];

    private static $many_many = [
        "PerferendisCumManys" => PerferendisCum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}