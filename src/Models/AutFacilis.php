<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutFacilis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutFacilis';

    private static $has_one = [
        "NobisIllum" => NobisIllum::class
    ];

    private static $has_many = [
        "NobisIllums" => NobisIllum::class
    ];

    private static $many_many = [
        "NobisIllumManys" => NobisIllum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}