<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OmnisEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OmnisEst';

    private static $has_one = [
        "AbMagni" => AbMagni::class
    ];

    private static $has_many = [
        "AbMagnis" => AbMagni::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AbMagniManys" => AbMagni::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}