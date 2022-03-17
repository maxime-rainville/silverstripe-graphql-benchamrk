<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TeneturRepudiandaePraesentium extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TeneturRepudiandaePraesentium';

    private static $has_one = [
        "TeneturRepudiandaePraesentium" => TeneturRepudiandaePraesentium::class,
        "SitNihilAd" => SitNihilAd::class
    ];

    private static $has_many = [
        "TeneturRepudiandaePraesentiums" => TeneturRepudiandaePraesentium::class,
        "SitNihilAds" => SitNihilAd::class
    ];
}