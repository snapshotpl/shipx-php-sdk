<?php
/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MB\ShipXSDK\DataTransferObject;

class AbstractCollection extends DataTransferObject
{
    public string $href;

    public int $count;

    public int $page;

    public int $per_page;

    /**
     * Classes extending this class should have specified proper type of this array in doc block.
     * A fully qualified name must be used, eg. "@var \MB\ShipXSDK\Model\Organization[]"
     * @var array
     */
    public array $items;
}