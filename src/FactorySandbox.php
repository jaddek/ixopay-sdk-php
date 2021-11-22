<?php

namespace Jaddek\Ixopay\Http;

class FactorySandbox extends Factory
{
    protected static function getHost(): string
    {
        return Ixopay::HOST_API_SANDBOX;
    }
}