<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosAut';

    private static $has_one = [
        "VelitDoloremque" => VelitDoloremque::class
    ];

    private static $has_many = [
        "VelitDoloremques" => VelitDoloremque::class
    ];

    private static $many_many = [
        "VelitDoloremqueManys" => VelitDoloremque::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}