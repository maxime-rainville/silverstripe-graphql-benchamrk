<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtVitae extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtVitae';

    private static $has_one = [
        "ProvidentVitae" => ProvidentVitae::class
    ];

    private static $has_many = [
        "ProvidentVitaes" => ProvidentVitae::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "ProvidentVitaeManys" => ProvidentVitae::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}