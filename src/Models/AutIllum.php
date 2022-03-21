<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutIllum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutIllum';

    private static $has_one = [
        "DictaProvident" => DictaProvident::class
    ];

    private static $has_many = [
        "DictaProvidents" => DictaProvident::class
    ];

    private static $many_many = [
        "DictaProvidentManys" => DictaProvident::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}