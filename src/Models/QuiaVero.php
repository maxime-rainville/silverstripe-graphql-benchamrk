<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaVero extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaVero';

    private static $has_one = [
        "ConsecteturExplicabo" => ConsecteturExplicabo::class
    ];

    private static $has_many = [
        "ConsecteturExplicabos" => ConsecteturExplicabo::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ConsecteturExplicaboManys" => ConsecteturExplicabo::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}