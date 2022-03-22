<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IdCorrupti extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IdCorrupti';

    private static $has_one = [
        "LiberoNulla" => LiberoNulla::class
    ];

    private static $has_many = [
        "LiberoNullas" => LiberoNulla::class
    ];

    private static $many_many = [
        "LiberoNullaManys" => LiberoNulla::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}