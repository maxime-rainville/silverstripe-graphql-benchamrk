<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NonConsequatur';

    private static $has_one = [
        "PorroDelectus" => PorroDelectus::class
    ];

    private static $has_many = [
        "PorroDelectuss" => PorroDelectus::class
    ];

    private static $many_many = [
        "PorroDelectusManys" => PorroDelectus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}