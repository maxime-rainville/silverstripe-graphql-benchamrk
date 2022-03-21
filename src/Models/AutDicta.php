<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutDicta extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutDicta';

    private static $has_one = [
        "QuasiSit" => QuasiSit::class
    ];

    private static $has_many = [
        "QuasiSits" => QuasiSit::class
    ];

    private static $many_many = [
        "QuasiSitManys" => QuasiSit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}