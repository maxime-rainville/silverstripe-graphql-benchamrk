<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class BeataeAmetDolores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'BeataeAmetDolores';

    private static $has_one = [
        "BeataeAmetDolores" => BeataeAmetDolores::class,
        "ItaqueAtDucimus" => ItaqueAtDucimus::class
    ];

    private static $has_many = [
        "BeataeAmetDoloress" => BeataeAmetDolores::class,
        "ItaqueAtDucimuss" => ItaqueAtDucimus::class
    ];
}