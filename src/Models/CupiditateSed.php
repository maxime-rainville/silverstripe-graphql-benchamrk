<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CupiditateSed extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CupiditateSed';

    private static $has_one = [
        "TotamIpsam" => TotamIpsam::class
    ];

    private static $has_many = [
        "TotamIpsams" => TotamIpsam::class
    ];

    private static $many_many = [
        "TotamIpsamManys" => TotamIpsam::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}