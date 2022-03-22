<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusRerum extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusRerum';

    private static $has_one = [
        "NihilVitae" => NihilVitae::class
    ];

    private static $has_many = [
        "NihilVitaes" => NihilVitae::class
    ];

    private static $many_many = [
        "NihilVitaeManys" => NihilVitae::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}