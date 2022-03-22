<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OccaecatiNihil extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OccaecatiNihil';

    private static $has_one = [
        "DictaTotam" => DictaTotam::class
    ];

    private static $has_many = [
        "DictaTotams" => DictaTotam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DictaTotamManys" => DictaTotam::class
    ];

    private static $extensions = [
        
    ];
}