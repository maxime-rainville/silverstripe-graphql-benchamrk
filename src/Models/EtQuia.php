<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtQuia extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtQuia';

    private static $has_one = [
        "OfficiaId" => OfficiaId::class
    ];

    private static $has_many = [
        "OfficiaIds" => OfficiaId::class
    ];

    private static $many_many = [
        "OfficiaIdManys" => OfficiaId::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}