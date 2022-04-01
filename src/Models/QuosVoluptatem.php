<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuosVoluptatem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuosVoluptatem';

    private static $has_one = [
        "FugitNihil" => FugitNihil::class,
        "EstNon" => EstNon::class,
        "AccusamusTenetur" => AccusamusTenetur::class
    ];

    private static $has_many = [
        "FugitNihils" => FugitNihil::class,
        "EstNons" => EstNon::class,
        "AccusamusTeneturs" => AccusamusTenetur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "FugitNihilManys" => FugitNihil::class,
        "EstNonManys" => EstNon::class,
        "AccusamusTeneturManys" => AccusamusTenetur::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}