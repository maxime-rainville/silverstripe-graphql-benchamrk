<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class BeataeConsecteturEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'BeataeConsecteturEt';

    private static $has_one = [
        "VoluptatumAliasRepudiandae" => VoluptatumAliasRepudiandae::class,
        "BeataeConsecteturEt" => BeataeConsecteturEt::class
    ];

    private static $has_many = [
        "VoluptatumAliasRepudiandaes" => VoluptatumAliasRepudiandae::class,
        "BeataeConsecteturEts" => BeataeConsecteturEt::class
    ];
}