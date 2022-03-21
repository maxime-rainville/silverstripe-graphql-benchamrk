<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RerumOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RerumOfficia';

    private static $has_one = [
        "QuisRerum" => QuisRerum::class
    ];

    private static $has_many = [
        "QuisRerums" => QuisRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuisRerumManys" => QuisRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}