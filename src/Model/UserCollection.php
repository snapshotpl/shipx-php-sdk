<?php
/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MB\ShipXSDK\Model;

use MB\ShipXSDK\DataTransferObject\AbstractCollection;

class UserCollection extends AbstractCollection
{
    /**
     * @var \MB\ShipXSDK\Model\User[]
     */
    public array $items;
}