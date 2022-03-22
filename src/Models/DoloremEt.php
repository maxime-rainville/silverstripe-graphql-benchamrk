<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DoloremEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DoloremEt';

    private static $has_one = [
        "ItaqueNihil" => ItaqueNihil::class
    ];

    private static $has_many = [
        "ItaqueNihils" => ItaqueNihil::class
    ];

    private static $many_many = [
        "ItaqueNihilManys" => ItaqueNihil::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}