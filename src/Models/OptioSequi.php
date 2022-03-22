<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OptioSequi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OptioSequi';

    private static $has_one = [
        "QuiSed" => QuiSed::class
    ];

    private static $has_many = [
        "QuiSeds" => QuiSed::class
    ];

    private static $many_many = [
        "QuiSedManys" => QuiSed::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}