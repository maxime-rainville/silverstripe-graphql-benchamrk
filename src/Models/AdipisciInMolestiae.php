<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AdipisciInMolestiae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AdipisciInMolestiae';

    private static $has_one = [
        "AdipisciInMolestiae" => AdipisciInMolestiae::class,
        "LaboriosamAutPorro" => LaboriosamAutPorro::class
    ];

    private static $has_many = [
        "AdipisciInMolestiaes" => AdipisciInMolestiae::class,
        "LaboriosamAutPorros" => LaboriosamAutPorro::class
    ];
}