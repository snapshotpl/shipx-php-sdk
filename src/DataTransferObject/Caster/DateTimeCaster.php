<?php

namespace MB\ShipXSDK\DataTransferObject\Caster;

use Attribute;
use DateTime;
use Spatie\DataTransferObject\Caster;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class DateTimeCaster implements Caster
{
    public function cast(mixed $value): DateTime
    {
        return new DateTime($value);
    }
}
