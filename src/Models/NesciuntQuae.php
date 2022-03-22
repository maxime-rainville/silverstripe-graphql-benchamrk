<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NesciuntQuae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NesciuntQuae';

    private static $has_one = [
        "HicOfficia" => HicOfficia::class
    ];

    private static $has_many = [
        "HicOfficias" => HicOfficia::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "HicOfficiaManys" => HicOfficia::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}