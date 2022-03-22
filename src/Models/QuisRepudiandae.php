<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisRepudiandae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisRepudiandae';

    private static $has_one = [
        "UtSit" => UtSit::class
    ];

    private static $has_many = [
        "UtSits" => UtSit::class
    ];

    private static $many_many = [
        "UtSitManys" => UtSit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}