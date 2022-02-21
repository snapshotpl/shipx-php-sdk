<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class UserCollection extends AbstractCollection
{
    /**
     * @var User[]
     */
    #[CastWith(ArrayCaster::class, itemType: User::class)]
    public array $items;
}
