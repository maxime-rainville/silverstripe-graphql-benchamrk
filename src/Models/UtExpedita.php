<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtExpedita extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtExpedita';

    private static $has_one = [
        "LaboriosamIn" => LaboriosamIn::class
    ];

    private static $has_many = [
        "LaboriosamIns" => LaboriosamIn::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "LaboriosamInManys" => LaboriosamIn::class
    ];

    private static $extensions = [
        
    ];
}