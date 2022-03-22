<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtSit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtSit';

    private static $has_one = [
        "QuiBeatae" => QuiBeatae::class
    ];

    private static $has_many = [
        "QuiBeataes" => QuiBeatae::class
    ];

    private static $many_many = [
        "QuiBeataeManys" => QuiBeatae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}