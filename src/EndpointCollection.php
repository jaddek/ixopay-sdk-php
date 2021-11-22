<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http;

use Jaddek\Ixopay\Http\Endpoint\Endpoint;
use Jaddek\Ixopay\Http\Endpoint\Transactions;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class EndpointCollection
{
    private static array $instances = [];

    public function __construct(
        private HttpClientInterface $ixopayClient,
        private Signer              $signer,
        private string              $apiToken,
        private ?LoggerInterface    $logger = null
    )
    {

    }

    private function getEndpoint(string $class): mixed
    {
        if (!(self::$instances[$class] ?? null) instanceof Endpoint) {
            self::$instances[$class] = new $class($this->ixopayClient, $this->signer, $this->apiToken, $this->logger);
        }

        return self::$instances[$class];
    }

    public function getTransaction(): Transactions
    {
        return $this->getEndpoint(Transactions::class);
    }
}