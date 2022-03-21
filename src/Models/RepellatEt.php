<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RepellatEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RepellatEt';

    private static $has_one = [
        "SedTenetur" => SedTenetur::class
    ];

    private static $has_many = [
        "SedTeneturs" => SedTenetur::class
    ];

    private static $many_many = [
        "SedTeneturManys" => SedTenetur::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}