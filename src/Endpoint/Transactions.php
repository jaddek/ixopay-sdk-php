<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\ConnectorCredentials;
use Jaddek\Ixopay\Http\UserCredentials;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionCapture;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDeRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionIncrementalAuthorization;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionPayout;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRefund;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionVoid;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class Transactions extends Endpoint implements TransactionInterface
{
    public function debit(
        TransactionDebit     $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/debit',
            [
                'json' => $transaction
            ],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function preauthorize(
        TransactionDebit     $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/preauthorize',
            [
                'json' => $transaction
            ],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function capture(
        TransactionCapture   $capture,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/capture',
            [
                'json' => $capture
            ],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function void(
        TransactionVoid      $void,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/void',
            [
                'json' => $void
            ],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function register(
        TransactionRegister  $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST', '
            /api/v3/transaction/{apiKey}/register',
            [
                'json' => $transaction
            ],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function deregister(
        TransactionDeRegister $deregister,
        ConnectorCredentials  $connectorCredentials,
        UserCredentials       $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/deregister',
            [],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function refund(
        TransactionRefund    $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/refund',
            [],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function payout(
        TransactionPayout    $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/payout',
            [],
            $connectorCredentials,
            $userCredentials
        );
    }

    public function incrementalAuthorization(
        TransactionIncrementalAuthorization $transaction,
        ConnectorCredentials                $connectorCredentials,
        UserCredentials                     $userCredentials,
    ): ResponseInterface
    {
        return $this->request(
            'POST',
            '/api/v3/transaction/{apiKey}/incrementalAuthorization',
            [],
            $connectorCredentials,
            $userCredentials
        );
    }
}