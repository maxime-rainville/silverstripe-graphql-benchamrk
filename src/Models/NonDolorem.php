<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonDolorem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NonDolorem';

    private static $has_one = [
        "MinimaIn" => MinimaIn::class
    ];

    private static $has_many = [
        "MinimaIns" => MinimaIn::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MinimaInManys" => MinimaIn::class
    ];

    private static $extensions = [
        
    ];
}