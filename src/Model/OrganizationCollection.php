<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class OrganizationCollection extends AbstractCollection
{
    /**
     * @var Organization[]
     */
    #[CastWith(ArrayCaster::class, itemType: Organization::class)]
    public array $items;
}
