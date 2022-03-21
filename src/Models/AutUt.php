<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutUt';

    private static $has_one = [
        "MolestiaeOfficiis" => MolestiaeOfficiis::class
    ];

    private static $has_many = [
        "MolestiaeOfficiiss" => MolestiaeOfficiis::class
    ];

    private static $many_many = [
        "MolestiaeOfficiisManys" => MolestiaeOfficiis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}