<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DictaEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DictaEst';

    private static $has_one = [
        "VoluptasIllo" => VoluptasIllo::class
    ];

    private static $has_many = [
        "VoluptasIllos" => VoluptasIllo::class
    ];

    private static $many_many = [
        "VoluptasIlloManys" => VoluptasIllo::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}