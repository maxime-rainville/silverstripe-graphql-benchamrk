<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ExcepturiNisi extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ExcepturiNisi';

    private static $has_one = [
        "NesciuntNecessitatibus" => NesciuntNecessitatibus::class
    ];

    private static $has_many = [
        "NesciuntNecessitatibuss" => NesciuntNecessitatibus::class
    ];

    private static $many_many = [
        "NesciuntNecessitatibusManys" => NesciuntNecessitatibus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}