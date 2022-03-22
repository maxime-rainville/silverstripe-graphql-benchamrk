<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutNemo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutNemo';

    private static $has_one = [
        "IdUt" => IdUt::class
    ];

    private static $has_many = [
        "IdUts" => IdUt::class
    ];

    private static $many_many = [
        "IdUtManys" => IdUt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}