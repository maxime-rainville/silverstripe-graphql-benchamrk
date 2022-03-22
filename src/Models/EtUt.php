<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtUt';

    private static $has_one = [
        "UtFacere" => UtFacere::class
    ];

    private static $has_many = [
        "UtFaceres" => UtFacere::class
    ];

    private static $many_many = [
        "UtFacereManys" => UtFacere::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}