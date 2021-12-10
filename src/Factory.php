<?php

namespace Jaddek\Ixopay\Http;

use Jaddek\Ixopay\Http\Endpoint\Endpoint;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Factory
{
    public static function buildEndpoint(string $class): Endpoint
    {
        $httpClient = self::getHttpClient();

        return new $class($httpClient);
    }

    protected static function getHttpClient(): HttpClientInterface
    {
        return HttpClient::createForBaseUri(self::getHost());
    }

    protected static function getHost(): string
    {
        return Ixopay::HOST_API;
    }
}