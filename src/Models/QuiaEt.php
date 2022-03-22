<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaEt';

    private static $has_one = [
        "AutAutem" => AutAutem::class
    ];

    private static $has_many = [
        "AutAutems" => AutAutem::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutAutemManys" => AutAutem::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}