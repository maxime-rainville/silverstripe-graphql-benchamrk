<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class RemNam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'RemNam';

    private static $has_one = [
        "QuibusdamIpsam" => QuibusdamIpsam::class
    ];

    private static $has_many = [
        "QuibusdamIpsams" => QuibusdamIpsam::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "QuibusdamIpsamManys" => QuibusdamIpsam::class
    ];

    private static $extensions = [
        
    ];
}