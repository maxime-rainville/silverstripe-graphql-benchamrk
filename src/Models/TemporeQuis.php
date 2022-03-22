<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporeQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporeQuis';

    private static $has_one = [
        "MollitiaRerum" => MollitiaRerum::class
    ];

    private static $has_many = [
        "MollitiaRerums" => MollitiaRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "MollitiaRerumManys" => MollitiaRerum::class
    ];

    private static $extensions = [
        
    ];
}