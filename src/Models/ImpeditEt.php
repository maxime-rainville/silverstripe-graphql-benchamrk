<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ImpeditEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ImpeditEt';

    private static $has_one = [
        "QuamUt" => QuamUt::class
    ];

    private static $has_many = [
        "QuamUts" => QuamUt::class
    ];

    private static $many_many = [
        "QuamUtManys" => QuamUt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}