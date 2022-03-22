<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NemoImpedit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NemoImpedit';

    private static $has_one = [
        "SolutaMolestias" => SolutaMolestias::class
    ];

    private static $has_many = [
        "SolutaMolestiass" => SolutaMolestias::class
    ];

    private static $many_many = [
        "SolutaMolestiasManys" => SolutaMolestias::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}