<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IureLaborum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IureLaborum';

    private static $has_one = [
        "VoluptatibusRecusandae" => VoluptatibusRecusandae::class
    ];

    private static $has_many = [
        "VoluptatibusRecusandaes" => VoluptatibusRecusandae::class
    ];

    private static $many_many = [
        "VoluptatibusRecusandaeManys" => VoluptatibusRecusandae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}