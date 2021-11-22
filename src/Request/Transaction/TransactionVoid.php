<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

class TransactionVoid extends Transaction
{
    public function __construct(
        string $merchantTransactionId,
        string $referenceUuid,
    )
    {
        $this->merchantTransactionId = $merchantTransactionId;
        $this->referenceUuid         = $referenceUuid;
    }
}