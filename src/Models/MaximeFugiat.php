<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MaximeFugiat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MaximeFugiat';

    private static $has_one = [
        "EaEt" => EaEt::class
    ];

    private static $has_many = [
        "EaEts" => EaEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EaEtManys" => EaEt::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}