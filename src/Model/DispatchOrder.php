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

class DispatchOrder extends DataTransferObject
{
    public string $href;

    public int $id;

    public string $status;

    public DateTime $created_at;

    public DateTime $updated_at;

    public Address $address;

    /**
     * @var ShipmentSimple[]
     */
    #[CastWith(ArrayCaster::class, itemType: ShipmentSimple::class)]
    public array $shipments;

    /**
     * @var Comment[]
     */
    #[CastWith(ArrayCaster::class, itemType: Comment::class)]
    public array $comments;
}
