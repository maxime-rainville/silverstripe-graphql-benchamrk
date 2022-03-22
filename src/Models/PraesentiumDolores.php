<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PraesentiumDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PraesentiumDolores';

    private static $has_one = [
        "TeneturSed" => TeneturSed::class
    ];

    private static $has_many = [
        "TeneturSeds" => TeneturSed::class
    ];

    private static $many_many = [
        "TeneturSedManys" => TeneturSed::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}