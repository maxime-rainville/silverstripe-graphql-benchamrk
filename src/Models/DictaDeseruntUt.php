<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DictaDeseruntUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DictaDeseruntUt';

    private static $has_one = [
        "SitQuosEa" => SitQuosEa::class,
        "DictaDeseruntUt" => DictaDeseruntUt::class
    ];

    private static $has_many = [
        "SitQuosEas" => SitQuosEa::class,
        "DictaDeseruntUts" => DictaDeseruntUt::class
    ];
}