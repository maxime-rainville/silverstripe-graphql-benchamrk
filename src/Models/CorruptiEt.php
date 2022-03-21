<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorruptiEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorruptiEt';

    private static $has_one = [
        "QuaeVoluptates" => QuaeVoluptates::class
    ];

    private static $has_many = [
        "QuaeVoluptatess" => QuaeVoluptates::class
    ];

    private static $many_many = [
        "QuaeVoluptatesManys" => QuaeVoluptates::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}