<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CulpaEx extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CulpaEx';

    private static $has_one = [
        "NatusDeserunt" => NatusDeserunt::class
    ];

    private static $has_many = [
        "NatusDeserunts" => NatusDeserunt::class
    ];

    private static $many_many = [
        "NatusDeseruntManys" => NatusDeserunt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}