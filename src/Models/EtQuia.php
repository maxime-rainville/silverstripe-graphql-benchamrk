<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtQuia';

    private static $has_one = [
        "RerumAut" => RerumAut::class
    ];

    private static $has_many = [
        "RerumAuts" => RerumAut::class
    ];

    private static $many_many = [
        "RerumAutManys" => RerumAut::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}