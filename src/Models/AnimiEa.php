<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AnimiEa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AnimiEa';

    private static $has_one = [
        "NumquamSint" => NumquamSint::class
    ];

    private static $has_many = [
        "NumquamSints" => NumquamSint::class
    ];

    private static $many_many = [
        "NumquamSintManys" => NumquamSint::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}