<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilLaborum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilLaborum';

    private static $has_one = [
        "EosQuis" => EosQuis::class
    ];

    private static $has_many = [
        "EosQuiss" => EosQuis::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "EosQuisManys" => EosQuis::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}