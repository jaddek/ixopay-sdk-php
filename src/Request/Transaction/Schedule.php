<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

use Jaddek\Ixopay\Http\Enum\ScheduleEnum;
use Jaddek\Ixopay\Http\SerializableTrait;
use Symfony\Component\Validator\Constraints\Choice;

class Schedule implements \JsonSerializable
{
    use SerializableTrait;

    #[Choice(min: 3, max: 3)]
    private ?string $currency = null;

    #[Choice(choices: ScheduleEnum::PERIODS)]
    private ?string $periodUnit = null;

    private ?string $startDateTime = null;

    private ?string $amount = null;

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getPeriodUnit(): ?string
    {
        return $this->periodUnit;
    }

    /**
     * @param string|null $periodUnit
     */
    public function setPeriodUnit(?string $periodUnit): void
    {
        $this->periodUnit = $periodUnit;
    }

    /**
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    /**
     * @param string|null $startDateTime
     */
    public function setStartDateTime(?\DateTimeInterface $startDateTime): void
    {
        $this->startDateTime = $startDateTime->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string|null $amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }


}