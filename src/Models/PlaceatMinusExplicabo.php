<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PlaceatMinusExplicabo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PlaceatMinusExplicabo';

    private static $has_one = [
        "EarumDebitisNam" => EarumDebitisNam::class,
        "PlaceatMinusExplicabo" => PlaceatMinusExplicabo::class
    ];

    private static $has_many = [
        "EarumDebitisNams" => EarumDebitisNam::class,
        "PlaceatMinusExplicabos" => PlaceatMinusExplicabo::class
    ];
}