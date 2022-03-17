<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EosFacilisSunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EosFacilisSunt';

    private static $has_one = [
        "EosFacilisSunt" => EosFacilisSunt::class,
        "AutProvidentVoluptas" => AutProvidentVoluptas::class
    ];

    private static $has_many = [
        "EosFacilisSunts" => EosFacilisSunt::class,
        "AutProvidentVoluptass" => AutProvidentVoluptas::class
    ];
}