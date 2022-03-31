<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EnimNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EnimNon';

    private static $has_one = [
        "AtEt" => AtEt::class
    ];

    private static $has_many = [
        "AtEts" => AtEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AtEtManys" => AtEt::class
    ];

    private static $extensions = [
        
    ];
}