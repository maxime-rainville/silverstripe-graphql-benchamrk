<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MinusUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MinusUt';

    private static $has_one = [
        "QuiaDolorem" => QuiaDolorem::class
    ];

    private static $has_many = [
        "QuiaDolorems" => QuiaDolorem::class
    ];

    private static $many_many = [
        "QuiaDoloremManys" => QuiaDolorem::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}