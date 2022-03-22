<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiaEnim extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiaEnim';

    private static $has_one = [
        "AutSit" => AutSit::class
    ];

    private static $has_many = [
        "AutSits" => AutSit::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutSitManys" => AutSit::class
    ];

    private static $extensions = [
        
    ];
}