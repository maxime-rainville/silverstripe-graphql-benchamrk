<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuoAutem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuoAutem';

    private static $has_one = [
        "DoloremA" => DoloremA::class
    ];

    private static $has_many = [
        "DoloremAs" => DoloremA::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloremAManys" => DoloremA::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}