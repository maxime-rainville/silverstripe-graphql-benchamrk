<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutEligendi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutEligendi';

    private static $has_one = [
        "QuoEst" => QuoEst::class
    ];

    private static $has_many = [
        "QuoEsts" => QuoEst::class
    ];

    private static $many_many = [
        "QuoEstManys" => QuoEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}