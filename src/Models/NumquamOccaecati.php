<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NumquamOccaecati extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NumquamOccaecati';

    private static $has_one = [
        "DolorumSaepe" => DolorumSaepe::class
    ];

    private static $has_many = [
        "DolorumSaepes" => DolorumSaepe::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DolorumSaepeManys" => DolorumSaepe::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}