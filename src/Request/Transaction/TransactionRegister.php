<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

class TransactionRegister extends Transaction
{
    public function __construct(
        string $merchantTransactionId,
    )
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }
}