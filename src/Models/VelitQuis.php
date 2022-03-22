<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VelitQuis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VelitQuis';

    private static $has_one = [
        "NullaMinima" => NullaMinima::class
    ];

    private static $has_many = [
        "NullaMinimas" => NullaMinima::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NullaMinimaManys" => NullaMinima::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}