<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\DataTransferObject;

class PriceOptional extends DataTransferObject
{
    public ?float $amount;

    public ?string $currency;
}
