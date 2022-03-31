<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PorroVelit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PorroVelit';

    private static $has_one = [
        "VoluptatemSaepe" => VoluptatemSaepe::class
    ];

    private static $has_many = [
        "VoluptatemSaepes" => VoluptatemSaepe::class
    ];

    private static $many_many = [
        "VoluptatemSaepeManys" => VoluptatemSaepe::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}