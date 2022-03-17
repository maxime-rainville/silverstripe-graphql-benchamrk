<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TemporeEtIllo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TemporeEtIllo';

    private static $has_one = [
        "ExpeditaNostrumOfficiis" => ExpeditaNostrumOfficiis::class,
        "TemporeEtIllo" => TemporeEtIllo::class
    ];

    private static $has_many = [
        "ExpeditaNostrumOfficiiss" => ExpeditaNostrumOfficiis::class,
        "TemporeEtIllos" => TemporeEtIllo::class
    ];
}