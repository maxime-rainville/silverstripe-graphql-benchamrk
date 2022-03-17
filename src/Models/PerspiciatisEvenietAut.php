<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerspiciatisEvenietAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PerspiciatisEvenietAut';

    private static $has_one = [
        "ConsequaturAutemConsequuntur" => ConsequaturAutemConsequuntur::class,
        "PerspiciatisEvenietAut" => PerspiciatisEvenietAut::class
    ];

    private static $has_many = [
        "ConsequaturAutemConsequunturs" => ConsequaturAutemConsequuntur::class,
        "PerspiciatisEvenietAuts" => PerspiciatisEvenietAut::class
    ];
}