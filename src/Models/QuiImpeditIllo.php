<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class QuiImpeditIllo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'QuiImpeditIllo';

    private static $has_one = [
        "QuiImpeditIllo" => QuiImpeditIllo::class,
        "LaboriosamPossimusNon" => LaboriosamPossimusNon::class
    ];

    private static $has_many = [
        "QuiImpeditIllos" => QuiImpeditIllo::class,
        "LaboriosamPossimusNons" => LaboriosamPossimusNon::class
    ];
}