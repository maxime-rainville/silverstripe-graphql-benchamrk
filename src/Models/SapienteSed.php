<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SapienteSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SapienteSed';

    private static $has_one = [
        "SaepeFugiat" => SaepeFugiat::class
    ];

    private static $has_many = [
        "SaepeFugiats" => SaepeFugiat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "SaepeFugiatManys" => SaepeFugiat::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}