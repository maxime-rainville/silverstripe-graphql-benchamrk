<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EstEnim extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EstEnim';

    private static $has_one = [
        "AutemTenetur" => AutemTenetur::class
    ];

    private static $has_many = [
        "AutemTeneturs" => AutemTenetur::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutemTeneturManys" => AutemTenetur::class
    ];

    private static $extensions = [
        
    ];
}