<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptasAspernatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptasAspernatur';

    private static $has_one = [
        "EarumSaepe" => EarumSaepe::class
    ];

    private static $has_many = [
        "EarumSaepes" => EarumSaepe::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EarumSaepeManys" => EarumSaepe::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}