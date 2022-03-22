<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IlloProvident extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IlloProvident';

    private static $has_one = [
        "OfficiaEius" => OfficiaEius::class
    ];

    private static $has_many = [
        "OfficiaEiuss" => OfficiaEius::class
    ];

    private static $many_many = [
        "OfficiaEiusManys" => OfficiaEius::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}