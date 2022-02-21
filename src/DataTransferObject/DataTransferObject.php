<?php

declare(strict_types=1);

namespace MB\ShipXSDK\DataTransferObject;

use DateTime;
use MB\ShipXSDK\DataTransferObject\Caster\DateTimeCaster;
use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject as OriginalDataTransferObject;

#[
    DefaultCast(DateTime::class, DateTimeCaster::class),
]
class DataTransferObject extends OriginalDataTransferObject
{
}
