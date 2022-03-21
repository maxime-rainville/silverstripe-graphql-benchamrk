<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RemMolestias extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RemMolestias';

    private static $has_one = [
        "BlanditiisTempora" => BlanditiisTempora::class
    ];

    private static $has_many = [
        "BlanditiisTemporas" => BlanditiisTempora::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "BlanditiisTemporaManys" => BlanditiisTempora::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}