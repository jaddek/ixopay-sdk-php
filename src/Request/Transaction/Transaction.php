<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

use Jaddek\Ixopay\Http\Enum\TransactionEnum;
use Jaddek\Ixopay\Http\SerializableTrait;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Url;

abstract class Transaction implements \JsonSerializable
{
    use SerializableTrait;

    protected ?string $merchantTransactionId = null;

    protected ?string $amount = null;

    #[Length(min: 3, max: 3)]
    protected ?string $currency = null;

    #[Length(max: 255)]
    protected ?string $merchantMetaData = null;

    #[Url]
    protected ?string $successUrl = null;

    #[Url]
    protected ?string $cancelUrl = null;

    #[Url]
    protected ?string $errorUrl = null;

    #[Url]
    protected ?string $callbackUrl = null;

    #[Length(max: 255)]
    protected ?string $description = null;

    #[Length(min: 2, max: 2)]
    protected ?string $language = null;

    #[Choice(choices: TransactionEnum::TRANSACTION_INDICATORS)]
    protected ?string $transactionIndicator = null;

    protected ?string   $additionalId1       = null;
    protected ?string   $additionalId2       = null;
    protected ?string   $referenceUuid       = null;
    protected ?string   $transactionToken    = null;
    protected ?string   $withRegister        = null;
    protected array     $items               = [];
    protected ?Customer $customer            = null;
    protected ?Schedule $schedule            = null;
    protected ?string   $customerProfileData = null;
    protected ?Secure3D $threeDSecureData    = null;
    protected array     $extraData           = [];

    /**
     * @return string|null
     */
    public function getMerchantMetaData(): ?string
    {
        return $this->merchantMetaData;
    }

    /**
     * @param string|null $merchantMetaData
     */
    public function setMerchantMetaData(?string $merchantMetaData): void
    {
        $this->merchantMetaData = $merchantMetaData;
    }

    /**
     * @return string|null
     */
    public function getMerchantTransactionId(): ?string
    {
        return $this->merchantTransactionId;
    }

    /**
     * @param string|null $merchantTransactionId
     */
    public function setMerchantTransactionId(?string $merchantTransactionId): void
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string|null $amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getSuccessUrl(): ?string
    {
        return $this->successUrl;
    }

    /**
     * @param string|null $successUrl
     */
    public function setSuccessUrl(?string $successUrl): void
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @return string|null
     */
    public function getCancelUrl(): ?string
    {
        return $this->cancelUrl;
    }

    /**
     * @param string|null $cancelUrl
     */
    public function setCancelUrl(?string $cancelUrl): void
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * @return string|null
     */
    public function getErrorUrl(): ?string
    {
        return $this->errorUrl;
    }

    /**
     * @param string|null $errorUrl
     */
    public function setErrorUrl(?string $errorUrl): void
    {
        $this->errorUrl = $errorUrl;
    }

    /**
     * @return string|null
     */
    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    /**
     * @param string|null $callbackUrl
     */
    public function setCallbackUrl(?string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string|null
     */
    public function getTransactionIndicator(): ?string
    {
        return $this->transactionIndicator;
    }

    /**
     * @param string|null $transactionIndicator
     */
    public function setTransactionIndicator(?string $transactionIndicator): void
    {
        $this->transactionIndicator = $transactionIndicator;
    }

    /**
     * @return string|null
     */
    public function getAdditionalId1(): ?string
    {
        return $this->additionalId1;
    }

    /**
     * @param string|null $additionalId1
     */
    public function setAdditionalId1(?string $additionalId1): void
    {
        $this->additionalId1 = $additionalId1;
    }

    /**
     * @return string|null
     */
    public function getAdditionalId2(): ?string
    {
        return $this->additionalId2;
    }

    /**
     * @param string|null $additionalId2
     */
    public function setAdditionalId2(?string $additionalId2): void
    {
        $this->additionalId2 = $additionalId2;
    }

    /**
     * @return string|null
     */
    public function getReferenceUuid(): ?string
    {
        return $this->referenceUuid;
    }

    /**
     * @param string|null $referenceUuid
     */
    public function setReferenceUuid(?string $referenceUuid): void
    {
        $this->referenceUuid = $referenceUuid;
    }

    /**
     * @return string|null
     */
    public function getTransactionToken(): ?string
    {
        return $this->transactionToken;
    }

    /**
     * @param string|null $transactionToken
     */
    public function setTransactionToken(?string $transactionToken): void
    {
        $this->transactionToken = $transactionToken;
    }

    /**
     * @return string|null
     */
    public function getWithRegister(): ?string
    {
        return $this->withRegister;
    }

    /**
     * @param string|null $withRegister
     */
    public function setWithRegister(?string $withRegister): void
    {
        $this->withRegister = $withRegister;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return Schedule|null
     */
    public function getSchedule(): ?Schedule
    {
        return $this->schedule;
    }

    /**
     * @param Schedule|null $schedule
     */
    public function setSchedule(?Schedule $schedule): void
    {
        $this->schedule = $schedule;
    }

    /**
     * @return string|null
     */
    public function getCustomerProfileData(): ?string
    {
        return $this->customerProfileData;
    }

    /**
     * @param string|null $customerProfileData
     */
    public function setCustomerProfileData(?string $customerProfileData): void
    {
        $this->customerProfileData = $customerProfileData;
    }

    /**
     * @return Secure3D|null
     */
    public function getThreeDSecureData(): ?Secure3D
    {
        return $this->threeDSecureData;
    }

    /**
     * @param Secure3D|null $threeDSecureData
     */
    public function setThreeDSecureData(?Secure3D $threeDSecureData): void
    {
        $this->threeDSecureData = $threeDSecureData;
    }

    /**
     * @return array
     */
    public function getExtraData(): array
    {
        return $this->extraData;
    }

    /**
     * @param array $extraData
     */
    public function setExtraData(array $extraData): void
    {
        $this->extraData = $extraData;
    }

    public function jsonSerialize(): array
    {
        return array_filter(get_object_vars($this), static fn($value) => !empty($value));
    }
}