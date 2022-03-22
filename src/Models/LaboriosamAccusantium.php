<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaboriosamAccusantium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaboriosamAccusantium';

    private static $has_one = [
        "OdioIure" => OdioIure::class
    ];

    private static $has_many = [
        "OdioIures" => OdioIure::class
    ];

    private static $many_many = [
        "OdioIureManys" => OdioIure::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}