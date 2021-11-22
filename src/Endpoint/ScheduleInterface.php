<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\Request\Schedule;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface ScheduleInterface
{
    public function startSchedule(string $scheduleId, Schedule $schedule): ResponseInterface;

    public function updateSchedule(string $scheduleId, Schedule $schedule): ResponseInterface;

    public function getSchedule(string $scheduleId): ResponseInterface;

    public function pauseSchedule(string $scheduleId): ResponseInterface;

    public function continueSchedule(string $scheduleId): ResponseInterface;

    public function cancelSchedule(string $scheduleId): ResponseInterface;
}