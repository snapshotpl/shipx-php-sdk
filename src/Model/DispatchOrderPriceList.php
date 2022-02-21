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

class DispatchOrderPriceList extends DataTransferObject
{
    public int $total_success_count;

    public int $total_error_count;

    public Price $total_price;

    /**
     * @var DispatchOrderPriceListItem[]
     */
    #[CastWith(ArrayCaster::class, itemType: DispatchOrderPriceListItem::class)]
    public array $price_list;

    /**
     * @var array[]
     */
    public array $invalid_shipments;
}
