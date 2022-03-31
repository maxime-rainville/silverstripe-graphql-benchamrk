<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ArchitectoVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ArchitectoVoluptatem';

    private static $has_one = [
        "MollitiaDolorem" => MollitiaDolorem::class
    ];

    private static $has_many = [
        "MollitiaDolorems" => MollitiaDolorem::class
    ];

    private static $many_many = [
        "MollitiaDoloremManys" => MollitiaDolorem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}