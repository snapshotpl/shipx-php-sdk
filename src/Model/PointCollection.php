<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class PointCollection extends AbstractCollection
{
    /**
     * @var Point[]
     */
    #[CastWith(ArrayCaster::class, itemType: Point::class)]
    public array $items;

    public int $total_pages;

    public array $meta;
}
