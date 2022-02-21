<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Client;

use MB\ShipXSDK\Exception\HttpClientException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

use function json_encode;

final class RequestSender implements RequestSenderInterface
{
    private ?RequestInterface $lastHttpRequest;

    public function __construct(
        private ClientInterface $httpClient,
        private RequestFactoryInterface $requestFactory,
        private StreamFactoryInterface $streamFactory
    ) {
    }

    public function send(string $httpMethod, string $uri, array $headers, array $payload): ResponseInterface
    {
        try {
            $httpRequest = $this->requestFactory->createRequest($httpMethod, $uri);
            foreach ($headers as $name => $value) {
                $httpRequest = $httpRequest->withHeader($name, $value);
            }
            if (!empty($payload)) {
                $stream = $this->streamFactory->createStream(json_encode($payload));
                $httpRequest = $httpRequest->withBody($stream);
            }
            $this->lastHttpRequest = $httpRequest;
            $httpResponse = $this->httpClient->sendRequest($httpRequest);
        } catch (ClientExceptionInterface $e) {
            throw new HttpClientException($e->getMessage(), $e->getCode(), $e);
        }
        return $httpResponse;
    }

    public function getLastHttpRequest(): ?RequestInterface
    {
        return $this->lastHttpRequest;
    }
}
