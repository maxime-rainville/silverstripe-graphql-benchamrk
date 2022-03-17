<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EsseBlanditiisConsequatur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EsseBlanditiisConsequatur';

    private static $has_one = [
        "EsseBlanditiisConsequatur" => EsseBlanditiisConsequatur::class,
        "EosVeritatisHic" => EosVeritatisHic::class
    ];

    private static $has_many = [
        "EsseBlanditiisConsequaturs" => EsseBlanditiisConsequatur::class,
        "EosVeritatisHics" => EosVeritatisHic::class
    ];
}