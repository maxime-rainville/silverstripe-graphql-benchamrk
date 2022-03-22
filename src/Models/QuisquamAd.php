<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisquamAd extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisquamAd';

    private static $has_one = [
        "PerferendisRerum" => PerferendisRerum::class
    ];

    private static $has_many = [
        "PerferendisRerums" => PerferendisRerum::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "PerferendisRerumManys" => PerferendisRerum::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}