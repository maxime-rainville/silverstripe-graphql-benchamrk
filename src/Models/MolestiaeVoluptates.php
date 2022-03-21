<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeVoluptates extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeVoluptates';

    private static $has_one = [
        "IdFuga" => IdFuga::class
    ];

    private static $has_many = [
        "IdFugas" => IdFuga::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "IdFugaManys" => IdFuga::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}