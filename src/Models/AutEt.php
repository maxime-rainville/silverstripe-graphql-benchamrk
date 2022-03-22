<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutEt';

    private static $has_one = [
        "EtAt" => EtAt::class
    ];

    private static $has_many = [
        "EtAts" => EtAt::class
    ];

    private static $many_many = [
        "EtAtManys" => EtAt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}