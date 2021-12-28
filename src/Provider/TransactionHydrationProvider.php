<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Provider;

use Jaddek\Ixopay\Http\ConnectorCredentials;
use Jaddek\Ixopay\Http\Endpoint\Transactions as TransactionEndpoint;
use Jaddek\Ixopay\Http\Hydrator;
use Jaddek\Ixopay\Http\Provider;
use Jaddek\Ixopay\Http\Request\Transaction\Transaction;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionCapture;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDeRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionIncrementalAuthorization;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionPayout;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRefund;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionVoid;
use Jaddek\Ixopay\Http\Response\ItemInterface;
use Jaddek\Ixopay\Http\Response\Transaction\Debit as DebitResponse;
use Jaddek\Ixopay\Http\UserCredentials;

class TransactionHydrationProvider extends Provider
{
    public function __construct(private TransactionEndpoint $endpoint)
    {

    }

    public function debit(
        TransactionDebit     $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): DebitResponse|ItemInterface
    {
        $data = $this->endpoint
            ->debit($transaction, $connectorCredentials, $userCredentials)
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function preauthorize(
        TransactionDebit     $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): DebitResponse|ItemInterface
    {
        $data = $this->endpoint
            ->preauthorize(
                $transaction,
                $connectorCredentials,
                $userCredentials)
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function capture(
        TransactionCapture   $capture,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): DebitResponse|ItemInterface
    {
        $data = $this->endpoint
            ->capture(
                $capture,
                $connectorCredentials,
                $userCredentials,
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function void(
        TransactionVoid      $void,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): DebitResponse|ItemInterface
    {
        $data = $this->endpoint
            ->void(
                $void,
                $connectorCredentials,
                $userCredentials,
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function register(
        TransactionRegister  $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): Transaction|ItemInterface
    {
        $data = $this->endpoint
            ->register(
                $transaction,
                $connectorCredentials,
                $userCredentials
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function deregister(
        TransactionDeRegister $deregister,
        ConnectorCredentials  $connectorCredentials,
        UserCredentials       $userCredentials
    ): Transaction|ItemInterface
    {
        $data = $this->endpoint
            ->deregister(
                $deregister,
                $connectorCredentials,
                $userCredentials,
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function refund(
        TransactionRefund    $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): Transaction|ItemInterface
    {
        $data = $this->endpoint
            ->refund(
                $transaction,
                $connectorCredentials,
                $userCredentials
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function payout(
        TransactionPayout    $transaction,
        ConnectorCredentials $connectorCredentials,
        UserCredentials      $userCredentials
    ): Transaction|ItemInterface
    {
        $data = $this->endpoint
            ->payout(
                $transaction,
                $connectorCredentials,
                $userCredentials
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }

    public function incrementalAuthorization(
        TransactionIncrementalAuthorization $transaction,
        ConnectorCredentials                $connectorCredentials,
        UserCredentials                     $userCredentials
    ): Transaction|ItemInterface
    {
        $data = $this->endpoint
            ->incrementalAuthorization
            ($transaction,
                $connectorCredentials,
                $userCredentials
            )
            ->toArray();

        return Hydrator::instance($data, DebitResponse::class);
    }
}
