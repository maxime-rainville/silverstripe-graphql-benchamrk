<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsecteturFacereRepellat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsecteturFacereRepellat';

    private static $has_one = [
        "ConsecteturFacereRepellat" => ConsecteturFacereRepellat::class,
        "QuiaPossimusAt" => QuiaPossimusAt::class
    ];

    private static $has_many = [
        "ConsecteturFacereRepellats" => ConsecteturFacereRepellat::class,
        "QuiaPossimusAts" => QuiaPossimusAt::class
    ];
}