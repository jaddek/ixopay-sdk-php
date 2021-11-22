<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Provider;

use Jaddek\Ixopay\Http\Endpoint\Schedules as ScheduleEndpoint;
use Jaddek\Ixopay\Http\Provider;
use Jaddek\Ixopay\Http\Request\Schedule;

final class ScheduleProvider extends Provider
{
    public function __construct(private ScheduleEndpoint $endpoint)
    {

    }

    public function startSchedule(string $scheduleId, Schedule $schedule): array
    {
        return $this->endpoint->startSchedule($scheduleId, $schedule)->toArray();
    }

    public function updateSchedule(string $scheduleId, Schedule $schedule): array
    {
        return $this->endpoint->updateSchedule($scheduleId, $schedule)->toArray();
    }

    public function getSchedule(string $scheduleId): array
    {
        return $this->endpoint->getSchedule($scheduleId)->toArray();
    }

    public function pauseSchedule(string $scheduleId): array
    {
        return $this->endpoint->pauseSchedule($scheduleId)->toArray();
    }

    public function continueSchedule(string $scheduleId): array
    {
        return $this->endpoint->continueSchedule($scheduleId)->toArray();
    }

    public function cancelSchedule(string $scheduleId): array
    {
        return $this->endpoint->cancelSchedule($scheduleId)->toArray();
    }
}
