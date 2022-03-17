<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EiusVeritatisReprehenderit extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EiusVeritatisReprehenderit';

    private static $has_one = [
        "EiusVeritatisReprehenderit" => EiusVeritatisReprehenderit::class,
        "SequiQuodMolestiae" => SequiQuodMolestiae::class
    ];

    private static $has_many = [
        "EiusVeritatisReprehenderits" => EiusVeritatisReprehenderit::class,
        "SequiQuodMolestiaes" => SequiQuodMolestiae::class
    ];
}