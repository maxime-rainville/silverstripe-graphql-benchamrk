<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class IpsamEarumUt extends DataObject
{
    use ModelTrait;
    private static $table_name = 'IpsamEarumUt';

    private static $has_one = [
        "IpsamEarumUt" => IpsamEarumUt::class,
        "SapienteQuisAut" => SapienteQuisAut::class
    ];

    private static $has_many = [
        "IpsamEarumUts" => IpsamEarumUt::class,
        "SapienteQuisAuts" => SapienteQuisAut::class
    ];
}