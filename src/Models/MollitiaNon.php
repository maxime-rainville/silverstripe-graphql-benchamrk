<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MollitiaNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MollitiaNon';

    private static $has_one = [
        "CulpaEaque" => CulpaEaque::class
    ];

    private static $has_many = [
        "CulpaEaques" => CulpaEaque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "CulpaEaqueManys" => CulpaEaque::class
    ];

    private static $extensions = [
        
    ];
}