<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagnamQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagnamQui';

    private static $has_one = [
        "FugaAlias" => FugaAlias::class
    ];

    private static $has_many = [
        "FugaAliass" => FugaAlias::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FugaAliasManys" => FugaAlias::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}