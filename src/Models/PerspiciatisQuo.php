<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class PerspiciatisQuo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'PerspiciatisQuo';

    private static $has_one = [
        "AssumendaAlias" => AssumendaAlias::class
    ];

    private static $has_many = [
        "AssumendaAliass" => AssumendaAlias::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AssumendaAliasManys" => AssumendaAlias::class
    ];

    private static $extensions = [
        
    ];
}