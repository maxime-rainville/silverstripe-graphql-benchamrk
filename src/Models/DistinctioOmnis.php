<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DistinctioOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DistinctioOmnis';

    private static $has_one = [
        "NequeEt" => NequeEt::class
    ];

    private static $has_many = [
        "NequeEts" => NequeEt::class
    ];

    private static $many_many = [
        "NequeEtManys" => NequeEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}