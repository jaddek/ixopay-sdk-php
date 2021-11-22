<?php


declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction\Payment;

use Jaddek\Ixopay\Http\SerializableTrait;

class Wallet implements \JsonSerializable
{
    use SerializableTrait;

    private ?string $walletType        = null;
    private ?string $walletOwner       = null;
    private ?string $walletReferenceId = null;

    /**
     * @return string|null
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    /**
     * @param string|null $walletType
     */
    public function setWalletType(?string $walletType): void
    {
        $this->walletType = $walletType;
    }

    /**
     * @return string|null
     */
    public function getWalletOwner(): ?string
    {
        return $this->walletOwner;
    }

    /**
     * @param string|null $walletOwner
     */
    public function setWalletOwner(?string $walletOwner): void
    {
        $this->walletOwner = $walletOwner;
    }

    /**
     * @return string|null
     */
    public function getWalletReferenceId(): ?string
    {
        return $this->walletReferenceId;
    }

    /**
     * @param string|null $walletReferenceId
     */
    public function setWalletReferenceId(?string $walletReferenceId): void
    {
        $this->walletReferenceId = $walletReferenceId;
    }
}