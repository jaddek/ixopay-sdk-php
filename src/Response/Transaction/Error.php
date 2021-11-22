<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Response\Transaction;

use Jaddek\Ixopay\Http\Response\ItemInterface;

class Error implements ItemInterface
{
    public function __construct(
        private string  $errorMessage,
        private int  $errorCode,
        private string  $adapterMessage,
        private string  $adapterCode,

    )
    {

    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getAdapterMessage(): string
    {
        return $this->adapterMessage;
    }

    /**
     * @return string
     */
    public function getAdapterCode(): string
    {
        return $this->adapterCode;
    }
}