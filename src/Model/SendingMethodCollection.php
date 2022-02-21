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

class SendingMethodCollection extends DataTransferObject
{
    public string $href;

    /**
     * @var DescriptiveEntity[]
     */
    #[CastWith(ArrayCaster::class, itemType: DescriptiveEntity::class)]
    public array $items;
}
