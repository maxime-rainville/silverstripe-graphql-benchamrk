<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtConsequuntur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtConsequuntur';

    private static $has_one = [
        "UtHarum" => UtHarum::class
    ];

    private static $has_many = [
        "UtHarums" => UtHarum::class
    ];

    private static $many_many = [
        "UtHarumManys" => UtHarum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}