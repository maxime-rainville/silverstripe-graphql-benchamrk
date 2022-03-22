<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutIpsa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutIpsa';

    private static $has_one = [
        "MolestiasVoluptas" => MolestiasVoluptas::class
    ];

    private static $has_many = [
        "MolestiasVoluptass" => MolestiasVoluptas::class
    ];

    private static $many_many = [
        "MolestiasVoluptasManys" => MolestiasVoluptas::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}