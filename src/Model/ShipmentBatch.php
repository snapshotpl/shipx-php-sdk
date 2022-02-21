<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use DateTime;
use MB\ShipXSDK\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class ShipmentBatch extends DataTransferObject
{
    public string $href;

    public int $id;

    public string $status;

    /**
     * @var ShipmentSimple[]
     */
    #[CastWith(ArrayCaster::class, itemType: ShipmentSimple::class)]
    public array $shipments;

    public DateTime $created_at;

    public DateTime $updated_at;
}
