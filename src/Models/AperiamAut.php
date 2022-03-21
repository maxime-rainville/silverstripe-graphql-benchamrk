<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AperiamAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AperiamAut';

    private static $has_one = [
        "MinusNobis" => MinusNobis::class
    ];

    private static $has_many = [
        "MinusNobiss" => MinusNobis::class
    ];

    private static $many_many = [
        "MinusNobisManys" => MinusNobis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}