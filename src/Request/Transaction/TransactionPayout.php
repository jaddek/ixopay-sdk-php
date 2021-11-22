<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

class TransactionPayout extends Transaction
{
    public function __construct(
        string  $merchantTransactionId,
        string  $amount,
        string  $currency,
        ?string $referenceUuid = null,
        ?string $transactionToken = null
    )
    {
        $this->merchantTransactionId = $merchantTransactionId;
        $this->amount                = $amount;
        $this->currency              = $currency;
        $this->referenceUuid         = $referenceUuid;
        $this->transactionToken      = $transactionToken;
    }
}