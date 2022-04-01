<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ArchitectoTotam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ArchitectoTotam';

    private static $has_one = [
        "AutFugit" => AutFugit::class,
        "QuiLaboriosam" => QuiLaboriosam::class,
        "UtAb" => UtAb::class
    ];

    private static $has_many = [
        "AutFugits" => AutFugit::class,
        "QuiLaboriosams" => QuiLaboriosam::class,
        "UtAbs" => UtAb::class
    ];

    private static $many_many = [
        "AutFugitManys" => AutFugit::class,
        "QuiLaboriosamManys" => QuiLaboriosam::class,
        "UtAbManys" => UtAb::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}