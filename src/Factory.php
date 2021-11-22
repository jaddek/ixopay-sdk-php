<?php

namespace Jaddek\Ixopay\Http;

use Jaddek\Ixopay\Http\Endpoint\Endpoint;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Factory
{
    public static function buildCollection(string $user, string $password, string $apiToken, string $sharedToken): EndpointCollection
    {
        $signer     = new Signer($sharedToken, $apiToken);
        $httpClient = self::getHttpClient($user, $password);

        return new EndpointCollection($httpClient, $signer, $apiToken);
    }

    public static function buildEndpoint(string $class, string $user, string $password, string $apiToken, string $sharedToken): Endpoint
    {
        $signer     = new Signer($sharedToken, $apiToken);
        $httpClient = self::getHttpClient($user, $password);

        return new $class($httpClient, $signer, $apiToken);
    }

    protected static function getHttpClient(string $user, $password): HttpClientInterface
    {
        return HttpClient::createForBaseUri(self::getHost(), [
            'auth_basic' => [$user, $password],
        ]);
    }

    protected static function getHost(): string
    {
        return Ixopay::HOST_API;
    }
}