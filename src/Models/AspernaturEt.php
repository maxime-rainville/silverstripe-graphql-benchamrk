<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AspernaturEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AspernaturEt';

    private static $has_one = [
        "AsperioresIn" => AsperioresIn::class
    ];

    private static $has_many = [
        "AsperioresIns" => AsperioresIn::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AsperioresInManys" => AsperioresIn::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}