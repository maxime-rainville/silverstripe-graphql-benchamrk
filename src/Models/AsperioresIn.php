<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AsperioresIn extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AsperioresIn';

    private static $has_one = [
        "AspernaturEt" => AspernaturEt::class
    ];

    private static $has_many = [
        "AspernaturEts" => AspernaturEt::class
    ];

    private static $many_many = [
        "AspernaturEtManys" => AspernaturEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}