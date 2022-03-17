<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AdipisciAutIpsam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AdipisciAutIpsam';

    private static $has_one = [
        "AdipisciAutIpsam" => AdipisciAutIpsam::class,
        "QuisEosVeniam" => QuisEosVeniam::class
    ];

    private static $has_many = [
        "AdipisciAutIpsams" => AdipisciAutIpsam::class,
        "QuisEosVeniams" => QuisEosVeniam::class
    ];
}