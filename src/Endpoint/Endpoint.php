<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\Signer;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class Endpoint
{
    public function __construct(
        protected HttpClientInterface $ixopayClient,
        protected Signer              $signer,
        protected string              $apiKey,
        protected ?LoggerInterface    $logger = null
    )
    {

    }

    protected function request(string $method, string $url, array $options = []): ResponseInterface
    {
        try {
            return $this->doRequest($method, $url, $options);
        } catch (ClientException $exception) {
            $response = $exception->getResponse();

            $this->logger?->debug(sprintf('%s:%s:response', __CLASS__, __FUNCTION__), [
                'response' => [
                    'content' => $response->getContent(false),
                    'headers' => $response->getHeaders(false)
                ]
            ]);

            return $response;
        }
    }

    protected function doRequest(string $method, string $url, array $options = []): ResponseInterface
    {
        $headers = $this->signer->__invoke($method, $url, $options['json'] ?? '');

        $finalOptions = array_merge($options, [
            'headers' => $headers
        ]);

        $this->logger?->debug(sprintf('%s:%s:request', __CLASS__, __FUNCTION__), [
            'request' => [
                'url'     => $url,
                'method'  => $method,
                'options' => $finalOptions
            ]
        ]);

        $response = $this->ixopayClient->request($method, $url, $finalOptions);

        $this->logger?->debug(sprintf('%s:%s:response', __CLASS__, __FUNCTION__), [
            'response' => [
                'content' => $response->getContent(false),
                'headers' => $response->getHeaders()
            ]
        ]);

        return $response;
    }
}