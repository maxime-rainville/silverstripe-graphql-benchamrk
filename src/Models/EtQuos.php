<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtQuos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtQuos';

    private static $has_one = [
        "IsteEt" => IsteEt::class
    ];

    private static $has_many = [
        "IsteEts" => IsteEt::class
    ];

    private static $many_many = [
        "IsteEtManys" => IsteEt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}