<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelEt';

    private static $has_one = [
        "TemporaNostrum" => TemporaNostrum::class
    ];

    private static $has_many = [
        "TemporaNostrums" => TemporaNostrum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "TemporaNostrumManys" => TemporaNostrum::class
    ];

    private static $extensions = [
        
    ];
}