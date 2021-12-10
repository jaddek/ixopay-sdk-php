<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\ConnectorCredentials;
use Jaddek\Ixopay\Http\UserCredentials;
use Jaddek\Ixopay\Http\Signer;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class Endpoint
{
    public function __construct(
        protected HttpClientInterface $ixopayClient,
        protected ?LoggerInterface    $logger = null
    )
    {

    }

    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @param UserCredentials|null $userCredentials
     * @return ResponseInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     * @throws \Exception
     */
    protected function request(
        string               $method,
        string               $url,
        array                $options,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        $url = strtr($url, [
            '{apiKey}' => $connectorCredentials->getApiKey()
        ]);

        $headers = $this->sign(
            $method,
            $url,
            $options,
            $connectorCredentials->getSharedSecret()
        );

        $options = array_merge(
            $options,
            $userCredentials->toAuthBasic(),
            [
                'headers' => $headers
            ]
        );

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

    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     * @throws \Exception
     */
    protected function doRequest(
        string $method,
        string $url,
        array  $options = [],
    ): ResponseInterface
    {
        $this->logger?->debug(sprintf('%s:%s:request', __CLASS__, __FUNCTION__), [
            'request' => [
                'url'     => $url,
                'method'  => $method,
                'options' => $options
            ]
        ]);

        $response = $this->ixopayClient->request($method, $url, $options);

        $this->logger?->debug(sprintf('%s:%s:response', __CLASS__, __FUNCTION__), [
            'response' => [
                'content' => $response->getContent(false),
                'headers' => $response->getHeaders()
            ]
        ]);

        return $response;
    }

    /**
     * @param string $method
     * @param $url
     * @param $options
     * @param $sharedSecret
     * @return array
     * @throws \Exception
     */
    private function sign(string $method, $url, $options, $sharedSecret): array
    {
        $signer = new Signer($sharedSecret);

        return $signer->sign($method, $url, $options['json'] ?? '');
    }
}