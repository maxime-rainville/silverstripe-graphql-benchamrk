<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonBeatae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NonBeatae';

    private static $has_one = [
        "SuntEt" => SuntEt::class
    ];

    private static $has_many = [
        "SuntEts" => SuntEt::class
    ];

    private static $many_many = [
        "SuntEtManys" => SuntEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}