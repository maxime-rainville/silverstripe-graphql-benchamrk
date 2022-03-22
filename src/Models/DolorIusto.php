<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorIusto extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorIusto';

    private static $has_one = [
        "QuiAssumenda" => QuiAssumenda::class
    ];

    private static $has_many = [
        "QuiAssumendas" => QuiAssumenda::class
    ];

    private static $many_many = [
        "QuiAssumendaManys" => QuiAssumenda::class
    ];

    private static $belongs_many_many = [

    ];

    private static $extensions = [
        
    ];
}