<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuidemConsequuntur extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuidemConsequuntur';

    private static $has_one = [
        "VoluptatemEa" => VoluptatemEa::class
    ];

    private static $has_many = [
        "VoluptatemEas" => VoluptatemEa::class
    ];

    private static $many_many = [
        "VoluptatemEaManys" => VoluptatemEa::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}