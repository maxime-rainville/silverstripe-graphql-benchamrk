<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class VoluptatibusMinima extends DataObject
{
    use ModelTrait;
    private static $table_name = 'VoluptatibusMinima';

    private static $has_one = [
        "PossimusDicta" => PossimusDicta::class
    ];

    private static $has_many = [
        "PossimusDictas" => PossimusDicta::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "PossimusDictaManys" => PossimusDicta::class
    ];

    private static $extensions = [
        
    ];
}