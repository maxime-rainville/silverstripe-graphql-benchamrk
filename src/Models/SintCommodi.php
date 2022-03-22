<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SintCommodi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SintCommodi';

    private static $has_one = [
        "VeniamSed" => VeniamSed::class
    ];

    private static $has_many = [
        "VeniamSeds" => VeniamSed::class
    ];

    private static $many_many = [
        "VeniamSedManys" => VeniamSed::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}