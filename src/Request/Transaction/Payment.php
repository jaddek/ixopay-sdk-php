<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

use Jaddek\Ixopay\Http\Request\Transaction\Payment\Iban;
use Jaddek\Ixopay\Http\Request\Transaction\Payment\Wallet;
use Jaddek\Ixopay\Http\SerializableTrait;

class Payment implements \JsonSerializable
{
    use SerializableTrait;

    public function __construct(
        private ?Iban   $ibanData = null,
        private ?Wallet $walletData = null
    )
    {
    }

    /**
     * @return Iban|null
     */
    public function getIbanData(): ?Iban
    {
        return $this->ibanData;
    }

    /**
     * @return Wallet|null
     */
    public function getWalletData(): ?Wallet
    {
        return $this->walletData;
    }
}