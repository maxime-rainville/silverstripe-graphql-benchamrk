<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UllamQuisquam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UllamQuisquam';

    private static $has_one = [
        "IpsamAtque" => IpsamAtque::class
    ];

    private static $has_many = [
        "IpsamAtques" => IpsamAtque::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IpsamAtqueManys" => IpsamAtque::class
    ];

    private static $extensions = [
        
    ];
}