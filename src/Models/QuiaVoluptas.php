<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaVoluptas extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaVoluptas';

    private static $has_one = [
        "UtTenetur" => UtTenetur::class
    ];

    private static $has_many = [
        "UtTeneturs" => UtTenetur::class
    ];

    private static $many_many = [
        "UtTeneturManys" => UtTenetur::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}