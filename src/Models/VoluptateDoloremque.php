<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptateDoloremque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptateDoloremque';

    private static $has_one = [
        "QuoSaepe" => QuoSaepe::class
    ];

    private static $has_many = [
        "QuoSaepes" => QuoSaepe::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuoSaepeManys" => QuoSaepe::class
    ];

    private static $extensions = [
        
    ];
}