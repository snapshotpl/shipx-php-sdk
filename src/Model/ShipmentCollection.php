<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class ShipmentCollection extends AbstractCollection
{
    /**
     * @var Shipment[]
     */
    #[CastWith(ArrayCaster::class, itemType: Shipment::class)]
    public array $items;
}
