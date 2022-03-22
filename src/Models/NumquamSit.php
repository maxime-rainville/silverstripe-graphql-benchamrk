<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NumquamSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NumquamSit';

    private static $has_one = [
        "DoloribusOdit" => DoloribusOdit::class
    ];

    private static $has_many = [
        "DoloribusOdits" => DoloribusOdit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloribusOditManys" => DoloribusOdit::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}