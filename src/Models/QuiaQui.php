<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaQui';

    private static $has_one = [
        "RemDignissimos" => RemDignissimos::class
    ];

    private static $has_many = [
        "RemDignissimoss" => RemDignissimos::class
    ];

    private static $many_many = [
        "RemDignissimosManys" => RemDignissimos::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}