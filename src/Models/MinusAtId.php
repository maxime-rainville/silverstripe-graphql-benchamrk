<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MinusAtId extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MinusAtId';

    private static $has_one = [
        "MinusAtId" => MinusAtId::class,
        "EnimIpsumAtque" => EnimIpsumAtque::class
    ];

    private static $has_many = [
        "MinusAtIds" => MinusAtId::class,
        "EnimIpsumAtques" => EnimIpsumAtque::class
    ];
}