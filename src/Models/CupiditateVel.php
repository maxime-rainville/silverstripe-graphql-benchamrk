<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateVel extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateVel';

    private static $has_one = [
        "EtCum" => EtCum::class
    ];

    private static $has_many = [
        "EtCums" => EtCum::class
    ];

    private static $many_many = [
        "EtCumManys" => EtCum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}