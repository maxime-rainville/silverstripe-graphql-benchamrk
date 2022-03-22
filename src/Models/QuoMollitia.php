<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuoMollitia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuoMollitia';

    private static $has_one = [
        "TemporibusPerferendis" => TemporibusPerferendis::class
    ];

    private static $has_many = [
        "TemporibusPerferendiss" => TemporibusPerferendis::class
    ];

    private static $many_many = [
        "TemporibusPerferendisManys" => TemporibusPerferendis::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}