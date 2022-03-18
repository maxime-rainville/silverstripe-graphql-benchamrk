<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporaCorporisDistinctio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporaCorporisDistinctio';

    private static $has_one = [
        "RecusandaeEtAt" => RecusandaeEtAt::class
    ];

    private static $has_many = [
        "RecusandaeEtAts" => RecusandaeEtAt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "RecusandaeEtAtManys" => RecusandaeEtAt::class
    ];

    private static $extensions = [
        
    ];
}