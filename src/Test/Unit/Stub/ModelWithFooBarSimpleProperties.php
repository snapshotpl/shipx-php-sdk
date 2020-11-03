<?php
/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MB\ShipXSDK\Test\Unit\Stub;

use MB\ShipXSDK\DataTransferObject\DataTransferObject;

class ModelWithFooBarSimpleProperties extends DataTransferObject
{
    public string $foo;

    public string $bar;
}
