<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class SintQuoEst extends DataObject
{
    use ModelTrait;
    private static $table_name = 'SintQuoEst';

    private static $has_one = [
        "IdIllumEt" => IdIllumEt::class,
        "SintQuoEst" => SintQuoEst::class
    ];

    private static $has_many = [
        "IdIllumEts" => IdIllumEt::class,
        "SintQuoEsts" => SintQuoEst::class
    ];
}