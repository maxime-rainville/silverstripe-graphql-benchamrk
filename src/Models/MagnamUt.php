<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagnamUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagnamUt';

    private static $has_one = [
        "NihilAccusantium" => NihilAccusantium::class
    ];

    private static $has_many = [
        "NihilAccusantiums" => NihilAccusantium::class
    ];

    private static $many_many = [
        "NihilAccusantiumManys" => NihilAccusantium::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}