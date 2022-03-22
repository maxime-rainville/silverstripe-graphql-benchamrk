<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiTemporibus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiTemporibus';

    private static $has_one = [
        "UtMaxime" => UtMaxime::class
    ];

    private static $has_many = [
        "UtMaximes" => UtMaxime::class
    ];

    private static $many_many = [
        "UtMaximeManys" => UtMaxime::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}