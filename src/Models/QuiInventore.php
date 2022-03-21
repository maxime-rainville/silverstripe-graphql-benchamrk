<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiInventore extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiInventore';

    private static $has_one = [
        "RecusandaeRerum" => RecusandaeRerum::class
    ];

    private static $has_many = [
        "RecusandaeRerums" => RecusandaeRerum::class
    ];

    private static $many_many = [
        "RecusandaeRerumManys" => RecusandaeRerum::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}