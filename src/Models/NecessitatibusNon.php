<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NecessitatibusNon extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NecessitatibusNon';

    private static $has_one = [
        "SintUt" => SintUt::class
    ];

    private static $has_many = [
        "SintUts" => SintUt::class
    ];

    private static $many_many = [
        "SintUtManys" => SintUt::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}