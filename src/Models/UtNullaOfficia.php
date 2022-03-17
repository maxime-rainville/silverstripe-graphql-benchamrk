<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtNullaOfficia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtNullaOfficia';

    private static $has_one = [
        "UtNullaOfficia" => UtNullaOfficia::class,
        "DistinctioOditPerspiciatis" => DistinctioOditPerspiciatis::class
    ];

    private static $has_many = [
        "UtNullaOfficias" => UtNullaOfficia::class,
        "DistinctioOditPerspiciatiss" => DistinctioOditPerspiciatis::class
    ];
}