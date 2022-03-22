<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiQuod extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiQuod';

    private static $has_one = [
        "NequeEsse" => NequeEsse::class
    ];

    private static $has_many = [
        "NequeEsses" => NequeEsse::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NequeEsseManys" => NequeEsse::class
    ];

    private static $extensions = [
        
    ];
}