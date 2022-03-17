<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RationeIpsumIllo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RationeIpsumIllo';

    private static $has_one = [
        "RationeIpsumIllo" => RationeIpsumIllo::class,
        "VoluptatumUtVoluptas" => VoluptatumUtVoluptas::class
    ];

    private static $has_many = [
        "RationeIpsumIllos" => RationeIpsumIllo::class,
        "VoluptatumUtVoluptass" => VoluptatumUtVoluptas::class
    ];
}