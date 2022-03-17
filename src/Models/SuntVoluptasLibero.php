<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SuntVoluptasLibero extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SuntVoluptasLibero';

    private static $has_one = [
        "SuntVoluptasLibero" => SuntVoluptasLibero::class,
        "NonLiberoRerum" => NonLiberoRerum::class
    ];

    private static $has_many = [
        "SuntVoluptasLiberos" => SuntVoluptasLibero::class,
        "NonLiberoRerums" => NonLiberoRerum::class
    ];
}