<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiEnim extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiEnim';

    private static $has_one = [
        "SequiDeserunt" => SequiDeserunt::class
    ];

    private static $has_many = [
        "SequiDeserunts" => SequiDeserunt::class
    ];

    private static $many_many = [
        "SequiDeseruntManys" => SequiDeserunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}