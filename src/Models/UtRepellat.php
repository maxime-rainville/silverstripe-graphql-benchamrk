<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtRepellat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtRepellat';

    private static $has_one = [
        "VitaeIusto" => VitaeIusto::class
    ];

    private static $has_many = [
        "VitaeIustos" => VitaeIusto::class
    ];

    private static $many_many = [
        "VitaeIustoManys" => VitaeIusto::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}