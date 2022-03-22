<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class HicDignissimos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'HicDignissimos';

    private static $has_one = [
        "VoluptateEligendi" => VoluptateEligendi::class
    ];

    private static $has_many = [
        "VoluptateEligendis" => VoluptateEligendi::class
    ];

    private static $many_many = [
        "VoluptateEligendiManys" => VoluptateEligendi::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}