<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class DolorIpsamQui extends DataObject
{
    use ModelTrait;
    private static $table_name = 'DolorIpsamQui';

    private static $has_one = [
        "PerferendisCumReprehenderit" => PerferendisCumReprehenderit::class,
        "DolorIpsamQui" => DolorIpsamQui::class
    ];

    private static $has_many = [
        "PerferendisCumReprehenderits" => PerferendisCumReprehenderit::class,
        "DolorIpsamQuis" => DolorIpsamQui::class
    ];
}