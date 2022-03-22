<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DignissimosEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DignissimosEt';

    private static $has_one = [
        "ExpeditaEt" => ExpeditaEt::class
    ];

    private static $has_many = [
        "ExpeditaEts" => ExpeditaEt::class
    ];

    private static $many_many = [
        "ExpeditaEtManys" => ExpeditaEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}