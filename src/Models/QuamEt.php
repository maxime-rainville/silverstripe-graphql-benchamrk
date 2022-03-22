<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuamEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuamEt';

    private static $has_one = [
        "DoloreIpsa" => DoloreIpsa::class
    ];

    private static $has_many = [
        "DoloreIpsas" => DoloreIpsa::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloreIpsaManys" => DoloreIpsa::class
    ];

    private static $extensions = [
        
    ];
}