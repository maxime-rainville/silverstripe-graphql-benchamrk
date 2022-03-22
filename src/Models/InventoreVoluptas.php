<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class InventoreVoluptas extends DataObject
{
    use ModelTrait;
    private static $table_name = 'InventoreVoluptas';

    private static $has_one = [
        "ArchitectoEst" => ArchitectoEst::class
    ];

    private static $has_many = [
        "ArchitectoEsts" => ArchitectoEst::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ArchitectoEstManys" => ArchitectoEst::class
    ];

    private static $extensions = [
        
    ];
}