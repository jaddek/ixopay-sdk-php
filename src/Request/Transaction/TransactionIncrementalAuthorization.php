<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

class TransactionIncrementalAuthorization extends Transaction
{
    public function __construct(
        string $merchantTransactionId,
        string $amount,
        string $currency,
        string $referenceUuid,
    )
    {
        $this->merchantTransactionId = $merchantTransactionId;
        $this->amount                = $amount;
        $this->currency              = $currency;
        $this->referenceUuid         = $referenceUuid;
    }
}