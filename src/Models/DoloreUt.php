<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloreUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloreUt';

    private static $has_one = [
        "AnimiEveniet" => AnimiEveniet::class
    ];

    private static $has_many = [
        "AnimiEveniets" => AnimiEveniet::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AnimiEvenietManys" => AnimiEveniet::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}