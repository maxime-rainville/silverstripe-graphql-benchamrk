<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class LaborumOptio extends DataObject
{
    use ModelTrait;
    private static $table_name = 'LaborumOptio';

    private static $has_one = [
        "IllumHarum" => IllumHarum::class
    ];

    private static $has_many = [
        "IllumHarums" => IllumHarum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IllumHarumManys" => IllumHarum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}