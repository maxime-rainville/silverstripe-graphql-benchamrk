<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuamSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuamSed';

    private static $has_one = [
        "RerumPerferendis" => RerumPerferendis::class
    ];

    private static $has_many = [
        "RerumPerferendiss" => RerumPerferendis::class
    ];

    private static $many_many = [
        "RerumPerferendisManys" => RerumPerferendis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}