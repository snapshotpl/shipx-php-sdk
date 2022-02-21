<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class DispatchPointCollection extends AbstractCollection
{
    /**
     * @var DispatchPoint[]
     */
    #[CastWith(ArrayCaster::class, itemType: DispatchPoint::class)]
    public array $items;
}
