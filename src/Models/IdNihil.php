<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IdNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IdNihil';

    private static $has_one = [
        "UtAspernatur" => UtAspernatur::class
    ];

    private static $has_many = [
        "UtAspernaturs" => UtAspernatur::class
    ];

    private static $many_many = [
        "UtAspernaturManys" => UtAspernatur::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}