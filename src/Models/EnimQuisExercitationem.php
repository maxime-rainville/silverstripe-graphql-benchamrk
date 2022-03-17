<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EnimQuisExercitationem extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EnimQuisExercitationem';

    private static $has_one = [
        "VeritatisEstVeritatis" => VeritatisEstVeritatis::class,
        "EnimQuisExercitationem" => EnimQuisExercitationem::class
    ];

    private static $has_many = [
        "VeritatisEstVeritatiss" => VeritatisEstVeritatis::class,
        "EnimQuisExercitationems" => EnimQuisExercitationem::class
    ];
}