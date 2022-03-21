<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtAmet extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtAmet';

    private static $has_one = [
        "DoloresPossimus" => DoloresPossimus::class
    ];

    private static $has_many = [
        "DoloresPossimuss" => DoloresPossimus::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DoloresPossimusManys" => DoloresPossimus::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}