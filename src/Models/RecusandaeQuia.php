<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RecusandaeQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RecusandaeQuia';

    private static $has_one = [
        "EiusRerum" => EiusRerum::class
    ];

    private static $has_many = [
        "EiusRerums" => EiusRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EiusRerumManys" => EiusRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}