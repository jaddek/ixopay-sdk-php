<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction\Payment;

use Jaddek\Ixopay\Http\SerializableTrait;

class Iban implements \JsonSerializable
{
    use SerializableTrait;

    private ?string $mandateDate = null;
    private ?string $iban        = null;
    private ?string $bic         = null;
    private ?string $mandateId   = null;

    /**
     * @return string|null
     */
    public function getMandateDate(): ?string
    {
        return $this->mandateDate;
    }

    /**
     * @param string|null $mandateDate
     */
    public function setMandateDate(\DateTimeInterface $mandateDate): void
    {
        $this->mandateDate = $mandateDate->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }

    /**
     * @param string|null $iban
     */
    public function setIban(?string $iban): void
    {
        $this->iban = $iban;
    }

    /**
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }

    /**
     * @param string|null $bic
     */
    public function setBic(?string $bic): void
    {
        $this->bic = $bic;
    }

    /**
     * @return string|null
     */
    public function getMandateId(): ?string
    {
        return $this->mandateId;
    }

    /**
     * @param string|null $mandateId
     */
    public function setMandateId(?string $mandateId): void
    {
        $this->mandateId = $mandateId;
    }


}