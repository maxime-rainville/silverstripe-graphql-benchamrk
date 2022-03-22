<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IsteImpedit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IsteImpedit';

    private static $has_one = [
        "PossimusSed" => PossimusSed::class
    ];

    private static $has_many = [
        "PossimusSeds" => PossimusSed::class
    ];

    private static $many_many = [
        "PossimusSedManys" => PossimusSed::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}