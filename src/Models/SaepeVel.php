<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SaepeVel extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SaepeVel';

    private static $has_one = [
        "DoloresEt" => DoloresEt::class
    ];

    private static $has_many = [
        "DoloresEts" => DoloresEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloresEtManys" => DoloresEt::class
    ];

    private static $extensions = [
        
    ];
}