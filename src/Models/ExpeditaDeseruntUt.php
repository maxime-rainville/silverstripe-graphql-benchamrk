<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExpeditaDeseruntUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ExpeditaDeseruntUt';

    private static $has_one = [
        "ExpeditaDeseruntUt" => ExpeditaDeseruntUt::class,
        "RepudiandaeDoloresFacilis" => RepudiandaeDoloresFacilis::class
    ];

    private static $has_many = [
        "ExpeditaDeseruntUts" => ExpeditaDeseruntUt::class,
        "RepudiandaeDoloresFaciliss" => RepudiandaeDoloresFacilis::class
    ];
}