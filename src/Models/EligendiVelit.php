<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EligendiVelit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EligendiVelit';

    private static $has_one = [
        "NihilPorro" => NihilPorro::class
    ];

    private static $has_many = [
        "NihilPorros" => NihilPorro::class
    ];

    private static $many_many = [
        "NihilPorroManys" => NihilPorro::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}