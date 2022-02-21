<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class AddressBookCollection extends AbstractCollection
{
    /**
     * @var AddressBook[]
     */
    #[CastWith(ArrayCaster::class, itemType: AddressBook::class)]
    public array $items;
}
