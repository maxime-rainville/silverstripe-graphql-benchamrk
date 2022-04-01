<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;
use SilverStripe\Versioned\Versioned;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class MinimaNemo extends DataObject
{
    use ModelTrait;
    private static $table_name = 'MinimaNemo';

    private static $has_one = [
        "AutEveniet" => AutEveniet::class,
        "LiberoNesciunt" => LiberoNesciunt::class,
        "DictaUt" => DictaUt::class
    ];

    private static $has_many = [
        "AutEveniets" => AutEveniet::class,
        "LiberoNesciunts" => LiberoNesciunt::class,
        "DictaUts" => DictaUt::class
    ];

    private static $many_many = [

    ];

    private static $belongs_many_many = [
        "AutEvenietManys" => AutEveniet::class,
        "LiberoNesciuntManys" => LiberoNesciunt::class,
        "DictaUtManys" => DictaUt::class
    ];

    private static $extensions = [
        Versioned::class,
    ];
}