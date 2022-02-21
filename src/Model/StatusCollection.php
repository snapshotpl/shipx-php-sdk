<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use MB\ShipXSDK\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class StatusCollection extends DataTransferObject
{
    public string $href;

    /**
     * @var Status[]
     */
    #[CastWith(ArrayCaster::class, itemType: Status::class)]
    public array $items;
}
