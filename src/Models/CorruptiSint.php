<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CorruptiSint extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CorruptiSint';

    private static $has_one = [
        "TemporaRepellendus" => TemporaRepellendus::class
    ];

    private static $has_many = [
        "TemporaRepellenduss" => TemporaRepellendus::class
    ];

    private static $many_many = [
        "TemporaRepellendusManys" => TemporaRepellendus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}