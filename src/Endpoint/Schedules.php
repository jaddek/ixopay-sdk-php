<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\UserCredentials;
use Jaddek\Ixopay\Http\Request\Schedule;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Jaddek\Ixopay\Http\ConnectorCredentials;

final class Schedules extends Endpoint implements ScheduleInterface
{
    public function startSchedule(
        string               $scheduleId,
        Schedule             $schedule,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/schedule/{apiKey}/start',
            [
                'json' => $schedule,
            ],
            $connectorCredentials,
            $userCredentials);
    }

    public function updateSchedule(
        string               $scheduleId,
        Schedule             $schedule,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/update', [
            '{schedule}' => $scheduleId,
        ]);

        return $this->request(
            'POST', $url,
            [
                'json' => $schedule,
            ],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function getSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/get', [
            '{schedule}' => $scheduleId,
        ]);

        return $this->request(
            'GET',
            $url,
            [],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function pauseSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/pause', [
            '{schedule}' => $scheduleId,

        ]);

        return $this->request(
            'POST',
            $url,
            [],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function continueSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/continue', [
            '{schedule}' => $scheduleId,

        ]);

        return $this->request(
            'POST',
            $url,
            [],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function cancelSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        $url = strtr('/api/v3/schedule/{apiKey}/{schedule}/cancel', [
            '{schedule}' => $scheduleId,
        ]);

        return $this->request(
            'POST',
            $url,
            [],
            $connectorCredentials,
            $userCredentials
        );
    }
}