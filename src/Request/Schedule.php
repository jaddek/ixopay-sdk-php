<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request;

use Jaddek\Ixopay\Http\Enum\ScheduleEnum;
use Symfony\Component\Validator\Constraints\Choice;

class Schedule
{
    private ?string $registerUuid = null;
    private ?string $amount       = null;

    #[Choice(min: 3, max: 3)]
    private ?string $currency = null;

    #[Choice(choices: ScheduleEnum::PERIODS)]
    private ?string $periodUnit    = null;
    private ?string $periodLength  = null;
    private ?string $startDateTime = null;

    public function __construct(
        ?string $registerUuid = null
    )
    {
        $this->registerUuid = $registerUuid;
    }

    /**
     * @return string|null
     */
    public function getRegisterUuid(): ?string
    {
        return $this->registerUuid;
    }

    /**
     * @param string|null $registerUuid
     */
    public function setRegisterUuid(?string $registerUuid): void
    {
        $this->registerUuid = $registerUuid;
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
    public function getPeriodLength(): ?string
    {
        return $this->periodLength;
    }

    /**
     * @param string|null $periodLength
     */
    public function setPeriodLength(?string $periodLength): void
    {
        $this->periodLength = $periodLength;
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
    public function setStartDateTime(?string $startDateTime): void
    {
        $this->startDateTime = $startDateTime;
    }
}

