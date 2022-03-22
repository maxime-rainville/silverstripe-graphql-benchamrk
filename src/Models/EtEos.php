<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtEos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtEos';

    private static $has_one = [
        "PerspiciatisRepudiandae" => PerspiciatisRepudiandae::class
    ];

    private static $has_many = [
        "PerspiciatisRepudiandaes" => PerspiciatisRepudiandae::class
    ];

    private static $many_many = [
        "PerspiciatisRepudiandaeManys" => PerspiciatisRepudiandae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}