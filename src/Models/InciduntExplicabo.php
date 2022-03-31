<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InciduntExplicabo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InciduntExplicabo';

    private static $has_one = [
        "PraesentiumEst" => PraesentiumEst::class
    ];

    private static $has_many = [
        "PraesentiumEsts" => PraesentiumEst::class
    ];

    private static $many_many = [
        "PraesentiumEstManys" => PraesentiumEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}