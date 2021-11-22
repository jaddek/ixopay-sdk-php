<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Enum;

interface ScheduleEnum
{
    public const PERIOD_UNIT_DAY = 'DAY';
    public const PERIOD_UNIT_WEEK = 'WEEK';
    public const PERIOD_UNIT_MONTH = 'MONTH';
    public const PERIOD_UNIT_YEAR = 'YEAR';

    public const PERIODS = [
        self::PERIOD_UNIT_DAY,
        self::PERIOD_UNIT_WEEK,
        self::PERIOD_UNIT_MONTH,
        self::PERIOD_UNIT_YEAR
    ];
}