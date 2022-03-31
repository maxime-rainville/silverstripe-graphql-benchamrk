<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class TeneturQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'TeneturQuia';

    private static $has_one = [
        "IpsumRerum" => IpsumRerum::class
    ];

    private static $has_many = [
        "IpsumRerums" => IpsumRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IpsumRerumManys" => IpsumRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}