<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EnimUndeVero extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EnimUndeVero';

    private static $has_one = [
        "NecessitatibusAspernaturAut" => NecessitatibusAspernaturAut::class,
        "EnimUndeVero" => EnimUndeVero::class
    ];

    private static $has_many = [
        "NecessitatibusAspernaturAuts" => NecessitatibusAspernaturAut::class,
        "EnimUndeVeros" => EnimUndeVero::class
    ];
}