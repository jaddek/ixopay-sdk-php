<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http;

interface Ixopay
{
    public const HOST_API         = 'https://sandbox.ixopay.com';
    public const HOST_API_SANDBOX = 'https://gateway.ixopay.com';
    public const DEFAULT_HEADERS  = [
        'Content-Type' => 'application/json',
    ];
}