<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Test\Integration\Client;

use Laminas\Diactoros\RequestFactory;
use Laminas\Diactoros\StreamFactory;
use MB\ShipXSDK\Client\Client;
use MB\ShipXSDK\Client\RequestSender;
use MB\ShipXSDK\Test\Integration\Config;

/**
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class ClientFactory
{
    public function create(bool $withAuthToken): Client
    {
        $baseUri = Config::getBaseUri();

        return new Client(
            $baseUri,
            $withAuthToken ? Config::getAuthToken() : null,
            new RequestSender(
                new \GuzzleHttp\Client(),
                new RequestFactory(),
                new StreamFactory(),
            ),
        );
    }
}
