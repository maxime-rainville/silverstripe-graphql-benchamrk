<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IdIn extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IdIn';

    private static $has_one = [
        "OfficiisFugit" => OfficiisFugit::class
    ];

    private static $has_many = [
        "OfficiisFugits" => OfficiisFugit::class
    ];

    private static $many_many = [
        "OfficiisFugitManys" => OfficiisFugit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}