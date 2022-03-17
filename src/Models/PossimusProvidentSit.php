<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PossimusProvidentSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PossimusProvidentSit';

    private static $has_one = [
        "PossimusProvidentSit" => PossimusProvidentSit::class,
        "RepellatTemporibusIn" => RepellatTemporibusIn::class
    ];

    private static $has_many = [
        "PossimusProvidentSits" => PossimusProvidentSit::class,
        "RepellatTemporibusIns" => RepellatTemporibusIn::class
    ];
}