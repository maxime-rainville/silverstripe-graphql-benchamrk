<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelitNisi';

    private static $has_one = [
        "QuodAmet" => QuodAmet::class
    ];

    private static $has_many = [
        "QuodAmets" => QuodAmet::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuodAmetManys" => QuodAmet::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}