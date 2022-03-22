<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptateEx extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptateEx';

    private static $has_one = [
        "DignissimosVeritatis" => DignissimosVeritatis::class
    ];

    private static $has_many = [
        "DignissimosVeritatiss" => DignissimosVeritatis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DignissimosVeritatisManys" => DignissimosVeritatis::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}