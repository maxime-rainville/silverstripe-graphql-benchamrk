<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporibusPorroRem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporibusPorroRem';

    private static $has_one = [
        "TemporibusPorroRem" => TemporibusPorroRem::class,
        "QuisExpeditaIusto" => QuisExpeditaIusto::class
    ];

    private static $has_many = [
        "TemporibusPorroRems" => TemporibusPorroRem::class,
        "QuisExpeditaIustos" => QuisExpeditaIusto::class
    ];
}