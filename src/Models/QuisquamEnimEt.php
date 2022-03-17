<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamEnimEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamEnimEt';

    private static $has_one = [
        "SimiliqueAutemUt" => SimiliqueAutemUt::class,
        "QuisquamEnimEt" => QuisquamEnimEt::class
    ];

    private static $has_many = [
        "SimiliqueAutemUts" => SimiliqueAutemUt::class,
        "QuisquamEnimEts" => QuisquamEnimEt::class
    ];
}