<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AtVeritatisPorro extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AtVeritatisPorro';

    private static $has_one = [
        "InCumqueCommodi" => InCumqueCommodi::class,
        "AtVeritatisPorro" => AtVeritatisPorro::class
    ];

    private static $has_many = [
        "InCumqueCommodis" => InCumqueCommodi::class,
        "AtVeritatisPorros" => AtVeritatisPorro::class
    ];
}