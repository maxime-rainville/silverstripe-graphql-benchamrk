<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedQuisquamNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedQuisquamNisi';

    private static $has_one = [
        "EumRepudiandaeReprehenderit" => EumRepudiandaeReprehenderit::class,
        "SedQuisquamNisi" => SedQuisquamNisi::class
    ];

    private static $has_many = [
        "EumRepudiandaeReprehenderits" => EumRepudiandaeReprehenderit::class,
        "SedQuisquamNisis" => SedQuisquamNisi::class
    ];
}