<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UndeCulpa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UndeCulpa';

    private static $has_one = [
        "LaboriosamReprehenderit" => LaboriosamReprehenderit::class
    ];

    private static $has_many = [
        "LaboriosamReprehenderits" => LaboriosamReprehenderit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaboriosamReprehenderitManys" => LaboriosamReprehenderit::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}