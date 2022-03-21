<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SedRem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SedRem';

    private static $has_one = [
        "OdioFacilis" => OdioFacilis::class
    ];

    private static $has_many = [
        "OdioFaciliss" => OdioFacilis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "OdioFacilisManys" => OdioFacilis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}