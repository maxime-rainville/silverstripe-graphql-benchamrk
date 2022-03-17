<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InciduntEumModi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InciduntEumModi';

    private static $has_one = [
        "QuodAssumendaVoluptatum" => QuodAssumendaVoluptatum::class,
        "InciduntEumModi" => InciduntEumModi::class
    ];

    private static $has_many = [
        "QuodAssumendaVoluptatums" => QuodAssumendaVoluptatum::class,
        "InciduntEumModis" => InciduntEumModi::class
    ];
}