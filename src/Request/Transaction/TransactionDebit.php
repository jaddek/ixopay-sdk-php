<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

class TransactionDebit extends Transaction
{
    public function __construct(string $merchantTransactionId, string $amount, string $currency)
    {
        $this->merchantTransactionId = $merchantTransactionId;
        $this->amount                = $amount;
        $this->currency              = $currency;
    }
}