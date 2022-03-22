<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisUllam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisUllam';

    private static $has_one = [
        "UtRepellendus" => UtRepellendus::class
    ];

    private static $has_many = [
        "UtRepellenduss" => UtRepellendus::class
    ];

    private static $many_many = [
        "UtRepellendusManys" => UtRepellendus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}