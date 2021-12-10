<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\UserCredentials;
use Jaddek\Ixopay\Http\Request\Schedule;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Jaddek\Ixopay\Http\ConnectorCredentials;

interface ScheduleInterface
{
    public function startSchedule(
        string               $scheduleId,
        Schedule             $schedule,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface;

    public function updateSchedule(
        string               $scheduleId,
        Schedule             $schedule,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $credentials
    ): ResponseInterface;

    public function getSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $credentials
    ): ResponseInterface;

    public function pauseSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $credentials
    ): ResponseInterface;

    public function continueSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $credentials
    ): ResponseInterface;

    public function cancelSchedule(
        string               $scheduleId,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $credentials
    ): ResponseInterface;
}