<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\Request\Schedule;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class Schedules extends Endpoint implements ScheduleInterface
{
    public function startSchedule(string $scheduleId, Schedule $schedule): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/start', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url, [
            'json' => $schedule
        ]);
    }

    public function updateSchedule(string $scheduleId, Schedule $schedule): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/update', [
            '{apiKey}'   => $this->apiKey,
            '{schedule}' => $scheduleId,

        ]);

        return $this->request('POST', $url, [
            'json' => $schedule
        ]);
    }

    public function getSchedule(string $scheduleId): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/get', [
            '{apiKey}'   => $this->apiKey,
            '{schedule}' => $scheduleId,

        ]);

        return $this->request('GET', $url);
    }

    public function pauseSchedule(string $scheduleId): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/pause', [
            '{apiKey}'   => $this->apiKey,
            '{schedule}' => $scheduleId,

        ]);

        return $this->request('POST', $url);
    }

    public function continueSchedule(string $scheduleId): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/continue', [
            '{apiKey}'   => $this->apiKey,
            '{schedule}' => $scheduleId,

        ]);

        return $this->request('POST', $url);
    }

    public function cancelSchedule(string $scheduleId): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/cancel', [
            '{apiKey}'   => $this->apiKey,
            '{schedule}' => $scheduleId,
        ]);

        return $this->request('POST', $url);
    }
}