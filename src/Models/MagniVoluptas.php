<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MagniVoluptas extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MagniVoluptas';

    private static $has_one = [
        "PariaturEnim" => PariaturEnim::class
    ];

    private static $has_many = [
        "PariaturEnims" => PariaturEnim::class
    ];

    private static $many_many = [
        "PariaturEnimManys" => PariaturEnim::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}