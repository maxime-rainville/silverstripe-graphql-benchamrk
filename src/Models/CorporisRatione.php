<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorporisRatione extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorporisRatione';

    private static $has_one = [
        "EligendiOfficia" => EligendiOfficia::class
    ];

    private static $has_many = [
        "EligendiOfficias" => EligendiOfficia::class
    ];

    private static $many_many = [
        "EligendiOfficiaManys" => EligendiOfficia::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}