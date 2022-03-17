<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AsperioresVoluptatemQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AsperioresVoluptatemQuia';

    private static $has_one = [
        "AsperioresVoluptatemQuia" => AsperioresVoluptatemQuia::class,
        "ExDeseruntQui" => ExDeseruntQui::class
    ];

    private static $has_many = [
        "AsperioresVoluptatemQuias" => AsperioresVoluptatemQuia::class,
        "ExDeseruntQuis" => ExDeseruntQui::class
    ];
}