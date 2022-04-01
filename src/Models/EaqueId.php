<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EaqueId extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EaqueId';

    private static $has_one = [
        "VelitA" => VelitA::class,
        "NonDignissimos" => NonDignissimos::class,
        "TeneturVelit" => TeneturVelit::class
    ];

    private static $has_many = [
        "VelitAs" => VelitA::class,
        "NonDignissimoss" => NonDignissimos::class,
        "TeneturVelits" => TeneturVelit::class
    ];

    private static $many_many = [
        "VelitAManys" => VelitA::class,
        "NonDignissimosManys" => NonDignissimos::class,
        "TeneturVelitManys" => TeneturVelit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}