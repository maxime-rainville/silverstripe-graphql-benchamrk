<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptasDicta extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptasDicta';

    private static $has_one = [
        "AutemDucimus" => AutemDucimus::class
    ];

    private static $has_many = [
        "AutemDucimuss" => AutemDucimus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutemDucimusManys" => AutemDucimus::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}