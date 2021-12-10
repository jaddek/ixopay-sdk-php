<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http;

class Signer
{
    private const BODY_ALGO    = 'sha512';
    private const CONTENT_TYPE = 'application/json; charset=utf-8';

    public function __construct(
        private ?string $sharedSecret = null
    )
    {

    }

    /**
     * @param string|null $sharedSecret
     */
    public function setSharedSecret(?string $sharedSecret): void
    {
        $this->sharedSecret = $sharedSecret;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param string|array|\JsonSerializable $body
     * @return array
     * @throws \Exception
     */
    public function sign(string $method, string $uri, string|array|\JsonSerializable $body = ''): array
    {
        if (empty($this->sharedSecret)) {
            throw new \Exception('The value for Shared Secret should be defined');
        }

        $json      = json_encode($body);
        $timestamp = $this->getTimestamp();
        $hash      = $this->getHash($json);
        $data      = implode("\n", [$method, $hash, self::CONTENT_TYPE, $timestamp, $uri]);
        $signature = $this->getHashHmac($data);

        return [
            'Date'         => $timestamp,
            'X-Date'       => $timestamp,
            'X-Signature'  => $signature,
            'Content-Type' => self::CONTENT_TYPE,
        ];
    }

    protected function getTimestamp(): string
    {
        return (new \DateTime('now', new \DateTimeZone('UTC')))->format('D, d M Y H:i:s T');
    }

    protected function getHash(string $body): string
    {
        $hash = hash(self::BODY_ALGO, $body, false);

        if ($hash === false) {
            throw new \Exception('Hash exception while sign request');
        }

        return $hash;
    }

    protected function getHashHmac(string $body): string
    {
        $hash = hash_hmac(self::BODY_ALGO, $body, $this->sharedSecret, true);

        if ($hash === false) {
            throw new \Exception('Hash hmac exception while sign request');
        }

        return base64_encode($hash);
    }
}