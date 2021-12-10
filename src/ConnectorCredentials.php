<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http;

class ConnectorCredentials
{
    public function __construct(
        private string $apiKey,
        private string $sharedSecret,
    )
    {

    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
}