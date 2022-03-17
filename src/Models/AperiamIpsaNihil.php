<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AperiamIpsaNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AperiamIpsaNihil';

    private static $has_one = [
        "AperiamIpsaNihil" => AperiamIpsaNihil::class,
        "RecusandaeSaepeVeniam" => RecusandaeSaepeVeniam::class
    ];

    private static $has_many = [
        "AperiamIpsaNihils" => AperiamIpsaNihil::class,
        "RecusandaeSaepeVeniams" => RecusandaeSaepeVeniam::class
    ];
}