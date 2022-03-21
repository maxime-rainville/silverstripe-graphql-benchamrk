<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusNumquam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusNumquam';

    private static $has_one = [
        "ReiciendisTempora" => ReiciendisTempora::class
    ];

    private static $has_many = [
        "ReiciendisTemporas" => ReiciendisTempora::class
    ];

    private static $many_many = [
        "ReiciendisTemporaManys" => ReiciendisTempora::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}