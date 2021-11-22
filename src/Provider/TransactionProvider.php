<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Provider;

use Jaddek\Ixopay\Http\Endpoint\Transactions as TransactionEndpoint;
use Jaddek\Ixopay\Http\Provider;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionCapture;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDeRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionIncrementalAuthorization;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionPayout;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRefund;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionVoid;

final class TransactionProvider extends Provider
{
    public function __construct(private TransactionEndpoint $endpoint)
    {

    }

    public function debit(TransactionDebit $transaction): array
    {
        $response = $this->endpoint->debit($transaction);

        return $response->toArray();
    }

    public function preauthorize(TransactionDebit $transaction): array
    {
        $response = $this->endpoint->preauthorize($transaction);

        return $response->toArray();
    }

    public function capture(TransactionCapture $capture): array
    {
        $response = $this->endpoint->capture($capture);

        return $response->toArray();
    }

    public function void(TransactionVoid $void): array
    {
        $response = $this->endpoint->void($void);

        return $response->toArray();
    }

    public function register(TransactionRegister $transaction): array
    {
        $response = $this->endpoint->register($transaction);

        return $response->toArray();
    }

    public function deregister(TransactionDeRegister $deregister): array
    {
        $response = $this->endpoint->deregister($deregister);

        return $response->toArray();
    }

    public function refund(TransactionRefund $transaction): array
    {
        $response = $this->endpoint->refund($transaction);

        return $response->toArray();
    }

    public function payout(TransactionPayout $transaction): array
    {
        $response = $this->endpoint->payout($transaction);

        return $response->toArray();
    }

    public function incrementalAuthorization(TransactionIncrementalAuthorization $transaction): array
    {
        $response = $this->endpoint->incrementalAuthorization($transaction);

        return $response->toArray();
    }
}