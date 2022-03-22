<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaAtque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaAtque';

    private static $has_one = [
        "ConsequaturSed" => ConsequaturSed::class
    ];

    private static $has_many = [
        "ConsequaturSeds" => ConsequaturSed::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsequaturSedManys" => ConsequaturSed::class
    ];

    private static $extensions = [
        
    ];
}