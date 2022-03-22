<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaUt';

    private static $has_one = [
        "EstDolorem" => EstDolorem::class
    ];

    private static $has_many = [
        "EstDolorems" => EstDolorem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EstDoloremManys" => EstDolorem::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}