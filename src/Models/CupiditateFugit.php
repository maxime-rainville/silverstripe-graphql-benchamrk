<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateFugit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateFugit';

    private static $has_one = [
        "ExpeditaEst" => ExpeditaEst::class
    ];

    private static $has_many = [
        "ExpeditaEsts" => ExpeditaEst::class
    ];

    private static $many_many = [
        "ExpeditaEstManys" => ExpeditaEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}