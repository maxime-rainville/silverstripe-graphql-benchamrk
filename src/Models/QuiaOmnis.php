<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaOmnis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaOmnis';

    private static $has_one = [
        "EtRerum" => EtRerum::class
    ];

    private static $has_many = [
        "EtRerums" => EtRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtRerumManys" => EtRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}