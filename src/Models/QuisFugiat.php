<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuisFugiat extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuisFugiat';

    private static $has_one = [
        "DolorEt" => DolorEt::class
    ];

    private static $has_many = [
        "DolorEts" => DolorEt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "DolorEtManys" => DolorEt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}