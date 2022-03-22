<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtEa extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtEa';

    private static $has_one = [
        "DucimusSunt" => DucimusSunt::class
    ];

    private static $has_many = [
        "DucimusSunts" => DucimusSunt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DucimusSuntManys" => DucimusSunt::class
    ];

    private static $extensions = [
        
    ];
}