<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutConsequatur';

    private static $has_one = [
        "EtMaxime" => EtMaxime::class
    ];

    private static $has_many = [
        "EtMaximes" => EtMaxime::class
    ];

    private static $many_many = [
        "EtMaximeManys" => EtMaxime::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}