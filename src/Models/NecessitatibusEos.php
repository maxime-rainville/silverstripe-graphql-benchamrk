<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NecessitatibusEos extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NecessitatibusEos';

    private static $has_one = [
        "PossimusEst" => PossimusEst::class
    ];

    private static $has_many = [
        "PossimusEsts" => PossimusEst::class
    ];

    private static $many_many = [
        "PossimusEstManys" => PossimusEst::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}