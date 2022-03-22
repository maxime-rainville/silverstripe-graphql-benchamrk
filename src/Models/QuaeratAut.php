<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuaeratAut extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuaeratAut';

    private static $has_one = [
        "QuisOmnis" => QuisOmnis::class
    ];

    private static $has_many = [
        "QuisOmniss" => QuisOmnis::class
    ];

    private static $many_many = [
        "QuisOmnisManys" => QuisOmnis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}