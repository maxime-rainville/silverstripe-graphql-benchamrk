<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class CumqueEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'CumqueEst';

    private static $has_one = [
        "VitaeEsse" => VitaeEsse::class
    ];

    private static $has_many = [
        "VitaeEsses" => VitaeEsse::class
    ];

    private static $many_many = [
        "VitaeEsseManys" => VitaeEsse::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class . '.versioned',
    ];
}