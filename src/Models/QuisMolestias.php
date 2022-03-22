<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisMolestias extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisMolestias';

    private static $has_one = [
        "ADolores" => ADolores::class
    ];

    private static $has_many = [
        "ADoloress" => ADolores::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ADoloresManys" => ADolores::class
    ];

    private static $extensions = [
        
    ];
}