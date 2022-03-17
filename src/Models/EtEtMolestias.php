<?php

namespace MaximeRainville\SilverStripeGraphQLBenchmark\Models;

use SilverStripe\ORM\DataObject;
use MaximeRainville\SilverStripeGraphQLBenchmark\ModelTrait;

/**
 * Generated by MaximeRainville\SilverStripeGraphQLBenchmark\Tasks\SchemaCreatorTask
 */
class EtEtMolestias extends DataObject
{
    use ModelTrait;
    private static $table_name = 'EtEtMolestias';

    private static $has_one = [
        "EtEtMolestias" => EtEtMolestias::class,
        "DucimusEtDeserunt" => DucimusEtDeserunt::class
    ];

    private static $has_many = [
        "EtEtMolestiass" => EtEtMolestias::class,
        "DucimusEtDeserunts" => DucimusEtDeserunt::class
    ];
}