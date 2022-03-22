<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilFugit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilFugit';

    private static $has_one = [
        "QuodMollitia" => QuodMollitia::class
    ];

    private static $has_many = [
        "QuodMollitias" => QuodMollitia::class
    ];

    private static $many_many = [
        "QuodMollitiaManys" => QuodMollitia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}