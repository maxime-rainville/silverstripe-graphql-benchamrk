<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NullaUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NullaUt';

    private static $has_one = [
        "ArchitectoTotam" => ArchitectoTotam::class
    ];

    private static $has_many = [
        "ArchitectoTotams" => ArchitectoTotam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ArchitectoTotamManys" => ArchitectoTotam::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}