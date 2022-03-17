<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AsperioresConsequaturNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AsperioresConsequaturNisi';

    private static $has_one = [
        "AsperioresConsequaturNisi" => AsperioresConsequaturNisi::class,
        "ConsequaturAtQuos" => ConsequaturAtQuos::class
    ];

    private static $has_many = [
        "AsperioresConsequaturNisis" => AsperioresConsequaturNisi::class,
        "ConsequaturAtQuoss" => ConsequaturAtQuos::class
    ];
}