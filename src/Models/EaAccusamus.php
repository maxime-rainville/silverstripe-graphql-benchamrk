<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EaAccusamus extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EaAccusamus';

    private static $has_one = [
        "QuisDeserunt" => QuisDeserunt::class
    ];

    private static $has_many = [
        "QuisDeserunts" => QuisDeserunt::class
    ];

    private static $many_many = [
        "QuisDeseruntManys" => QuisDeserunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}