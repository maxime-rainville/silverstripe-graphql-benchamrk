<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuodEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuodEt';

    private static $has_one = [
        "NatusNon" => NatusNon::class
    ];

    private static $has_many = [
        "NatusNons" => NatusNon::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NatusNonManys" => NatusNon::class
    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}