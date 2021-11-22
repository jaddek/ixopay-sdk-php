<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Provider;

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

final class TransactionProviderHydrationDecorator extends Provider
{
    public function __construct(private TransactionProvider $provider)
    {

    }

    public function debit(TransactionDebit $transaction): DebitResponse|ItemInterface
    {
        return Hydrator::instance($this->provider->debit($transaction), DebitResponse::class);
    }

    public function preauthorize(TransactionDebit $transaction): DebitResponse|ItemInterface
    {
        return Hydrator::instance($this->provider->preauthorize($transaction), DebitResponse::class);
    }

    public function capture(TransactionCapture $capture): DebitResponse|ItemInterface
    {
        return Hydrator::instance($this->provider->capture($capture), DebitResponse::class);
    }

    public function void(TransactionVoid $void): DebitResponse|ItemInterface
    {
        return Hydrator::instance($this->provider->void($void), DebitResponse::class);
    }

    public function register(TransactionRegister $transaction): Transaction|ItemInterface
    {
        return Hydrator::instance($this->provider->register($transaction), DebitResponse::class);
    }

    public function deregister(TransactionDeRegister $deregister): Transaction|ItemInterface
    {
        return Hydrator::instance($this->provider->deregister($deregister), DebitResponse::class);
    }

    public function refund(TransactionRefund $transaction): Transaction|ItemInterface
    {
        return Hydrator::instance($this->provider->refund($transaction), DebitResponse::class);
    }

    public function payout(TransactionPayout $transaction): Transaction|ItemInterface
    {
        return Hydrator::instance($this->provider->payout($transaction), DebitResponse::class);
    }

    public function incrementalAuthorization(TransactionIncrementalAuthorization $transaction): Transaction|ItemInterface
    {
        return Hydrator::instance($this->provider->incrementalAuthorization($transaction), DebitResponse::class);
    }
}