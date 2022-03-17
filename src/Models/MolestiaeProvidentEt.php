<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MolestiaeProvidentEt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MolestiaeProvidentEt';

    private static $has_one = [
        "MolestiaeProvidentEt" => MolestiaeProvidentEt::class,
        "AliquamFugitImpedit" => AliquamFugitImpedit::class
    ];

    private static $has_many = [
        "MolestiaeProvidentEts" => MolestiaeProvidentEt::class,
        "AliquamFugitImpedits" => AliquamFugitImpedit::class
    ];
}