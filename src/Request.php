<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http;

abstract class Request implements \JsonSerializable
{
    use JsonTrait;
}