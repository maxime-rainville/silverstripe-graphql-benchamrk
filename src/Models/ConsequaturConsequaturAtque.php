<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsequaturConsequaturAtque extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsequaturConsequaturAtque';

    private static $has_one = [
        "RepudiandaeDignissimosIpsa" => RepudiandaeDignissimosIpsa::class,
        "ConsequaturConsequaturAtque" => ConsequaturConsequaturAtque::class
    ];

    private static $has_many = [
        "RepudiandaeDignissimosIpsas" => RepudiandaeDignissimosIpsa::class,
        "ConsequaturConsequaturAtques" => ConsequaturConsequaturAtque::class
    ];
}