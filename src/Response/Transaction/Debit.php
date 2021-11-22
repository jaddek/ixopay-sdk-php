<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Response\Transaction;

use Jaddek\Ixopay\Http\Response\ItemInterface;

class Debit implements ItemInterface
{
    public function __construct(
        private bool           $success,
        private string           $uuid,
        private string           $purchaseId,
        private string           $returnType,
        private string           $paymentMethod,
        private ?string          $redirectUrl = null,
        private ?ErrorCollection $errors = null,
    )
    {

    }

    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getPurchaseId(): string
    {
        return $this->purchaseId;
    }

    /**
     * @return string
     */
    public function getReturnType(): string
    {
        return $this->returnType;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * @return ErrorCollection|null
     */
    public function getErrors(): ?ErrorCollection
    {
        return $this->errors;
    }
}