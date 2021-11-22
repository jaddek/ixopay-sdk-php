<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Endpoint;

use Jaddek\Ixopay\Http\Request\Transaction\TransactionCapture;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDebit;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionDeRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionIncrementalAuthorization;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionPayout;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRefund;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionRegister;
use Jaddek\Ixopay\Http\Request\Transaction\TransactionVoid;
use Symfony\Contracts\HttpClient\ResponseInterface;

interface TransactionInterface
{
    public function debit(TransactionDebit $transaction): ResponseInterface;

    public function preauthorize(TransactionDebit $transaction): ResponseInterface;

    public function capture(TransactionCapture $capture): ResponseInterface;

    public function void(TransactionVoid $void): ResponseInterface;

    public function register(TransactionRegister $transaction): ResponseInterface;

    public function deregister(TransactionDeRegister $deregister): ResponseInterface;

    public function refund(TransactionRefund $transaction): ResponseInterface;

    public function payout(TransactionPayout $transaction): ResponseInterface;

    public function incrementalAuthorization(TransactionIncrementalAuthorization $transaction): ResponseInterface;
}