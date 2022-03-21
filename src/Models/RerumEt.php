<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RerumEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RerumEt';

    private static $has_one = [
        "EtTemporibus" => EtTemporibus::class
    ];

    private static $has_many = [
        "EtTemporibuss" => EtTemporibus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtTemporibusManys" => EtTemporibus::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}