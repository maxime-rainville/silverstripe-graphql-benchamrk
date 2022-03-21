<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuosInventore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuosInventore';

    private static $has_one = [
        "QuodEt" => QuodEt::class
    ];

    private static $has_many = [
        "QuodEts" => QuodEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuodEtManys" => QuodEt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}