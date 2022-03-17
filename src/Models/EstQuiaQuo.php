<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstQuiaQuo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstQuiaQuo';

    private static $has_one = [
        "EstQuiaQuo" => EstQuiaQuo::class,
        "TotamTeneturSit" => TotamTeneturSit::class
    ];

    private static $has_many = [
        "EstQuiaQuos" => EstQuiaQuo::class,
        "TotamTeneturSits" => TotamTeneturSit::class
    ];
}