<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateQuia';

    private static $has_one = [
        "SuntSint" => SuntSint::class
    ];

    private static $has_many = [
        "SuntSints" => SuntSint::class
    ];

    private static $many_many = [
        "SuntSintManys" => SuntSint::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}