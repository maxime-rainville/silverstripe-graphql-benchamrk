<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class UtNam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'UtNam';

    private static $has_one = [
        "NecessitatibusLibero" => NecessitatibusLibero::class
    ];

    private static $has_many = [
        "NecessitatibusLiberos" => NecessitatibusLibero::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "NecessitatibusLiberoManys" => NecessitatibusLibero::class
    ];

    private static $extensions = [
        
    ];
}