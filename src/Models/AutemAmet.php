<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AutemAmet extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AutemAmet';

    private static $has_one = [
        "ErrorMagni" => ErrorMagni::class
    ];

    private static $has_many = [
        "ErrorMagnis" => ErrorMagni::class
    ];

    private static $many_many = [
        "ErrorMagniManys" => ErrorMagni::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}