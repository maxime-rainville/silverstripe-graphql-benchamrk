<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AperiamPlaceat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AperiamPlaceat';

    private static $has_one = [
        "QuasiSequi" => QuasiSequi::class
    ];

    private static $has_many = [
        "QuasiSequis" => QuasiSequi::class
    ];

    private static $many_many = [
        "QuasiSequiManys" => QuasiSequi::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}