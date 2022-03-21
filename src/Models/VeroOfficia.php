<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VeroOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VeroOfficia';

    private static $has_one = [
        "CumVoluptas" => CumVoluptas::class
    ];

    private static $has_many = [
        "CumVoluptass" => CumVoluptas::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CumVoluptasManys" => CumVoluptas::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}