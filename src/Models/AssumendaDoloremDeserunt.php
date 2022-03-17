<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class AssumendaDoloremDeserunt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'AssumendaDoloremDeserunt';

    private static $has_one = [
        "RationeAutReiciendis" => RationeAutReiciendis::class,
        "AssumendaDoloremDeserunt" => AssumendaDoloremDeserunt::class
    ];

    private static $has_many = [
        "RationeAutReiciendiss" => RationeAutReiciendis::class,
        "AssumendaDoloremDeserunts" => AssumendaDoloremDeserunt::class
    ];
}