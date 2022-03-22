<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RecusandaeArchitecto extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RecusandaeArchitecto';

    private static $has_one = [
        "EsseNostrum" => EsseNostrum::class
    ];

    private static $has_many = [
        "EsseNostrums" => EsseNostrum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EsseNostrumManys" => EsseNostrum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}