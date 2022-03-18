<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutNihilDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutNihilDolores';

    private static $has_one = [
        "SequiVoluptatesAccusamus" => SequiVoluptatesAccusamus::class
    ];

    private static $has_many = [
        "SequiVoluptatesAccusamuss" => SequiVoluptatesAccusamus::class
    ];

    private static $many_many = [
        "SequiVoluptatesAccusamusManys" => SequiVoluptatesAccusamus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}