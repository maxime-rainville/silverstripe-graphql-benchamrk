<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExcepturiLaudantium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ExcepturiLaudantium';

    private static $has_one = [
        "DeseruntEt" => DeseruntEt::class
    ];

    private static $has_many = [
        "DeseruntEts" => DeseruntEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DeseruntEtManys" => DeseruntEt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}