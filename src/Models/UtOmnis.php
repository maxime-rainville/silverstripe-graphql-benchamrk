<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtOmnis';

    private static $has_one = [
        "EumEligendi" => EumEligendi::class
    ];

    private static $has_many = [
        "EumEligendis" => EumEligendi::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EumEligendiManys" => EumEligendi::class
    ];

    private static $extensions = [
        
    ];
}