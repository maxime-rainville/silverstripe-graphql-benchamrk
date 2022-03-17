<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloresQuibusdamSunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloresQuibusdamSunt';

    private static $has_one = [
        "QuiMolestiaeQuo" => QuiMolestiaeQuo::class,
        "DoloresQuibusdamSunt" => DoloresQuibusdamSunt::class
    ];

    private static $has_many = [
        "QuiMolestiaeQuos" => QuiMolestiaeQuo::class,
        "DoloresQuibusdamSunts" => DoloresQuibusdamSunt::class
    ];
}