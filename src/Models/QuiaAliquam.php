<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiaAliquam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiaAliquam';

    private static $has_one = [
        "SapienteOdit" => SapienteOdit::class
    ];

    private static $has_many = [
        "SapienteOdits" => SapienteOdit::class
    ];

    private static $many_many = [
        "SapienteOditManys" => SapienteOdit::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        Versioned::class,
    ];
}