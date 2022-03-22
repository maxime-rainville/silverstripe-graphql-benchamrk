<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuasiDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuasiDolores';

    private static $has_one = [
        "NonConsectetur" => NonConsectetur::class
    ];

    private static $has_many = [
        "NonConsecteturs" => NonConsectetur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NonConsecteturManys" => NonConsectetur::class
    ];

    private static $extensions = [
        
    ];
}