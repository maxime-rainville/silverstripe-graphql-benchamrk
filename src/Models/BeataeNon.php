<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class BeataeNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'BeataeNon';

    private static $has_one = [
        "RepellatVoluptas" => RepellatVoluptas::class
    ];

    private static $has_many = [
        "RepellatVoluptass" => RepellatVoluptas::class
    ];

    private static $many_many = [
        "RepellatVoluptasManys" => RepellatVoluptas::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}