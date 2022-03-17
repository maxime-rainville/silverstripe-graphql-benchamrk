<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class NihilDucimusQuam extends DataObject
{
    use ModelTrait;
    private static $table_name = 'NihilDucimusQuam';

    private static $has_one = [
        "NihilDucimusQuam" => NihilDucimusQuam::class,
        "EtInEst" => EtInEst::class
    ];

    private static $has_many = [
        "NihilDucimusQuams" => NihilDucimusQuam::class,
        "EtInEsts" => EtInEst::class
    ];
}