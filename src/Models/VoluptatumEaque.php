<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatumEaque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatumEaque';

    private static $has_one = [
        "OditFugiat" => OditFugiat::class
    ];

    private static $has_many = [
        "OditFugiats" => OditFugiat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OditFugiatManys" => OditFugiat::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}