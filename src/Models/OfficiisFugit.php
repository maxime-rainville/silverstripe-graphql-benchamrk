<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class OfficiisFugit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'OfficiisFugit';

    private static $has_one = [
        "IdIn" => IdIn::class
    ];

    private static $has_many = [
        "IdIns" => IdIn::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IdInManys" => IdIn::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}