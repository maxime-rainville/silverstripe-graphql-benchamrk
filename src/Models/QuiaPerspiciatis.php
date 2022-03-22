<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaPerspiciatis extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaPerspiciatis';

    private static $has_one = [
        "RemRepellendus" => RemRepellendus::class
    ];

    private static $has_many = [
        "RemRepellenduss" => RemRepellendus::class
    ];

    private static $many_many = [
        "RemRepellendusManys" => RemRepellendus::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}