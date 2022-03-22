<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstEum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstEum';

    private static $has_one = [
        "AbDoloremque" => AbDoloremque::class
    ];

    private static $has_many = [
        "AbDoloremques" => AbDoloremque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AbDoloremqueManys" => AbDoloremque::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}