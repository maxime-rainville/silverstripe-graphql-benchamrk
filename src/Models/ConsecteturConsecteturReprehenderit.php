<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class ConsecteturConsecteturReprehenderit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'ConsecteturConsecteturReprehenderit';

    private static $has_one = [
        "QuiNatusNihil" => QuiNatusNihil::class,
        "ConsecteturConsecteturReprehenderit" => ConsecteturConsecteturReprehenderit::class
    ];

    private static $has_many = [
        "QuiNatusNihils" => QuiNatusNihil::class,
        "ConsecteturConsecteturReprehenderits" => ConsecteturConsecteturReprehenderit::class
    ];
}