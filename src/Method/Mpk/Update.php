<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Method\Mpk;

use MB\ShipXSDK\Method\MethodInterface;
use MB\ShipXSDK\Method\WithAuthorizationInterface;
use MB\ShipXSDK\Method\WithJsonRequestInterface;
use MB\ShipXSDK\Method\WithJsonResponseInterface;
use MB\ShipXSDK\Model\Mpk;
use MB\ShipXSDK\Model\MpkForm;
use MB\ShipXSDK\Request\Request;

class Update implements
    MethodInterface,
    WithJsonRequestInterface,
    WithJsonResponseInterface,
    WithAuthorizationInterface
{
    public function getRequestMethod(): string
    {
        return Request::METHOD_PUT;
    }

    public function getUriTemplate(): string
    {
        return '/v1/mpks/:id';
    }

    public function getRequestPayloadModelName(): string
    {
        return MpkForm::class;
    }

    public function getResponsePayloadModelName(): string
    {
        return Mpk::class;
    }
}
