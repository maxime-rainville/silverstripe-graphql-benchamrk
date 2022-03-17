<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class FacereFacereId extends DataObject
{
    use ModelTrait;
    private static $table_name = 'FacereFacereId';

    private static $has_one = [
        "ConsequaturUtExplicabo" => ConsequaturUtExplicabo::class,
        "FacereFacereId" => FacereFacereId::class
    ];

    private static $has_many = [
        "ConsequaturUtExplicabos" => ConsequaturUtExplicabo::class,
        "FacereFacereIds" => FacereFacereId::class
    ];
}