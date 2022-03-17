<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaEtMollitia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaEtMollitia';

    private static $has_one = [
        "QuiAspernaturTotam" => QuiAspernaturTotam::class,
        "QuiaEtMollitia" => QuiaEtMollitia::class
    ];

    private static $has_many = [
        "QuiAspernaturTotams" => QuiAspernaturTotam::class,
        "QuiaEtMollitias" => QuiaEtMollitia::class
    ];
}