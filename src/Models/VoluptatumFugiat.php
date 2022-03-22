<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatumFugiat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatumFugiat';

    private static $has_one = [
        "AutMaiores" => AutMaiores::class
    ];

    private static $has_many = [
        "AutMaioress" => AutMaiores::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutMaioresManys" => AutMaiores::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}