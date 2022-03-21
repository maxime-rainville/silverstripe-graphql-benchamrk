<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DucimusQuibusdam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DucimusQuibusdam';

    private static $has_one = [
        "AtNeque" => AtNeque::class
    ];

    private static $has_many = [
        "AtNeques" => AtNeque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AtNequeManys" => AtNeque::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}