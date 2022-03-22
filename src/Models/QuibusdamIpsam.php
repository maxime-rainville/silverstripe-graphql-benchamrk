<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuibusdamIpsam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuibusdamIpsam';

    private static $has_one = [
        "RemNam" => RemNam::class
    ];

    private static $has_many = [
        "RemNams" => RemNam::class
    ];

    private static $many_many = [
        "RemNamManys" => RemNam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}