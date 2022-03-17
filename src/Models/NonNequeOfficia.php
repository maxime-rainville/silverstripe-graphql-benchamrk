<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NonNequeOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NonNequeOfficia';

    private static $has_one = [
        "NonNequeOfficia" => NonNequeOfficia::class,
        "EligendiVitaeFugit" => EligendiVitaeFugit::class
    ];

    private static $has_many = [
        "NonNequeOfficias" => NonNequeOfficia::class,
        "EligendiVitaeFugits" => EligendiVitaeFugit::class
    ];
}