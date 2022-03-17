<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuoFugiatVelit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuoFugiatVelit';

    private static $has_one = [
        "QuoFugiatVelit" => QuoFugiatVelit::class,
        "SintAmetNon" => SintAmetNon::class
    ];

    private static $has_many = [
        "QuoFugiatVelits" => QuoFugiatVelit::class,
        "SintAmetNons" => SintAmetNon::class
    ];
}