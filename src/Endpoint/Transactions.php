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

final class Transactions extends Endpoint implements TransactionInterface
{
    public function debit(TransactionDebit $transaction): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/debit', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url, [
            'json' => $transaction
        ]);
    }

    public function preauthorize(TransactionDebit $transaction): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/preauthorize', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url, [
            'json' => $transaction
        ]);
    }

    public function capture(TransactionCapture $capture): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/capture', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url, [
            'json' => $capture
        ]);
    }

    public function void(TransactionVoid $void): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/void', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url, [
            'json' => $void
        ]);
    }

    public function register(TransactionRegister $transaction): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/register', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url, [
            'json' => $transaction
        ]);
    }

    public function deregister(TransactionDeRegister $deregister): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/deregister', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url);
    }

    public function refund(TransactionRefund $transaction): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/refund', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url);
    }

    public function payout(TransactionPayout $transaction): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/payout', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url);
    }

    public function incrementalAuthorization(TransactionIncrementalAuthorization $transaction): ResponseInterface
    {
        $url = strtr('/api/v3/transaction/{apiKey}/incrementalAuthorization', [
            '{apiKey}' => $this->apiKey,
        ]);

        return $this->request('POST', $url);
    }
}