<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OditEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OditEt';

    private static $has_one = [
        "EtPlaceat" => EtPlaceat::class
    ];

    private static $has_many = [
        "EtPlaceats" => EtPlaceat::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EtPlaceatManys" => EtPlaceat::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}