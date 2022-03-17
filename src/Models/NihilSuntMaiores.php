<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilSuntMaiores extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilSuntMaiores';

    private static $has_one = [
        "NihilSuntMaiores" => NihilSuntMaiores::class,
        "ConsecteturUtMaxime" => ConsecteturUtMaxime::class
    ];

    private static $has_many = [
        "NihilSuntMaioress" => NihilSuntMaiores::class,
        "ConsecteturUtMaximes" => ConsecteturUtMaxime::class
    ];
}