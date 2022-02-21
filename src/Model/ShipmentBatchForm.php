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

class ShipmentBatchForm extends DataTransferObject
{
    public bool $only_choice_of_offer = false;

    /**
     * @var ShipmentBatchItemForm[]
     */
    #[CastWith(ArrayCaster::class, itemType: ShipmentBatchItemForm::class)]
    public array $shipments = [];
}
