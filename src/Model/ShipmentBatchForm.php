<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use Spatie\DataTransferObject\DataTransferObject;

class ShipmentBatchForm extends DataTransferObject
{
    public bool $only_choice_of_offer = false;

    /**
     * @var \MB\ShipXSDK\Model\ShipmentBatchItemForm[]
     */
    public array $shipments = [];
}
