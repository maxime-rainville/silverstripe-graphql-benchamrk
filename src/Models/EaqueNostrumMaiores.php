<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EaqueNostrumMaiores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EaqueNostrumMaiores';

    private static $has_one = [
        "EaqueNostrumMaiores" => EaqueNostrumMaiores::class,
        "AutMollitiaAut" => AutMollitiaAut::class
    ];

    private static $has_many = [
        "EaqueNostrumMaioress" => EaqueNostrumMaiores::class,
        "AutMollitiaAuts" => AutMollitiaAut::class
    ];
}