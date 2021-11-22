<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

use Jaddek\Ixopay\Http\Enum\Secure3DEnum;
use Jaddek\Ixopay\Http\SerializableTrait;
use Symfony\Component\Validator\Constraints\Choice;

class Secure3D implements \JsonSerializable
{
    use SerializableTrait;

    #[Choice(choices: Secure3DEnum::SECURE_3D)]
    private ?string $secure3D;

    #[Choice(choices: Secure3DEnum::CHANNELS)]
    private ?string $channel;

    #[Choice(choices: Secure3DEnum::AUTHENTICATION_INDICATORS)]
    private ?string $authenticationIndicator;

    #[Choice(choices: Secure3DEnum::AUTHENTICATION_METHODS)]
    private ?string $cardholderAuthenticationMethod;

    #[Choice(choices: Secure3DEnum::CHALLENGE_INDICATORS)]
    private ?string $challengeIndicator;

    #[Choice(choices: Secure3DEnum::PRIOR_AUTHENTICATION_METHODS)]
    private ?string $priorAuthenticationMethod;

    #[Choice(choices: Secure3DEnum::CARDHOLDER_ACCOUNT_TYPES)]
    private ?string $cardholderAccountType;

    #[Choice(choices: Secure3DEnum::CARDHOLDER_ACCOUNT_AGE_INDICATORS)]
    private ?string $cardholderAccountAgeIndicator;

    #[Choice(choices: Secure3DEnum::CARDHOLDER_ACCOUNT_CHANGE_INDICATORS)]
    private ?string $cardholderAccountChangeIndicator;

    #[Choice(choices: Secure3DEnum::CARDHOLDER_ACCOUNT_PASSWORD_CHANGE_INDICATORS)]
    private ?string $cardholderAccountPasswordChangeIndicator;

    private ?string $cardholderAuthenticationDateTime = null;
    private ?string $cardHolderAuthenticationData     = null;
    private ?string $priorAuthenticationDateTime      = null;
    private ?string $priorAuthenticationData          = null;
    private ?string $priorReference                   = null;
    private ?string $cardholderAccountDate            = null;
    private ?string $cardholderAccountLastChange      = null;

    private ?string $cardholderAccountLastPasswordChange = null;

    #[Choice(choices: Secure3DEnum::SHIPPING_ADDRESS_USAGE_INDICATORS)]
    private ?string $shippingAddressUsageIndicator = null;

    private ?string $shippingAddressFirstUsage = null;
    private ?string $transactionActivityDay    = null;
    private ?string $transactionActivityYear   = null;
    private ?string $addCardAttemptsDay        = null;
    private ?string $purchaseCountSixMonths    = null;

    #[Choice(choices: Secure3DEnum::SUSPICIOUS_ACCOUNT_ACTIVITY_INDICATORS)]
    private ?string $suspiciousAccountActivityIndicator = null;

    #[Choice(choices: Secure3DEnum::SHIPPING_NAME_EQUAL_INDICATORS)]
    private ?string $shippingNameEqualIndicator = null;

    #[Choice(choices: Secure3DEnum::PAYMENT_ACCOUNT_AGE_INDICATORS)]
    private ?string $paymentAccountAgeIndicator = null;
    private ?string $paymentAccountAgeDate      = null;
    private ?string $billingAddressLine3        = null;
    private ?string $shippingAddressLine3       = null;

    #[Choice(choices: Secure3DEnum::BILLING_SHIPPING_ADDRESS_MATCHES)]
    private ?string $billingShippingAddressMatch = null;
    private ?string $homePhoneCountryPrefix      = null;
    private ?string $homePhoneNumber             = null;
    private ?string $mobilePhoneCountryPrefix    = null;
    private ?string $mobilePhoneNumber           = null;
    private ?string $workPhoneCountryPrefix      = null;
    private ?string $workPhoneNumber             = null;
    private ?string $purchaseInstalData          = null;

    #[Choice(choices: Secure3DEnum::SHIP_INDICATORS)]
    private ?string $shipIndicator        = null;
    private ?string $deliveryTimeframe    = null;
    private ?string $deliveryEmailAddress = null;

    #[Choice(choices: Secure3DEnum::REORDER_ITEMS_INDICATORS)]
    private ?string $reorderItemsIndicator = null;

    #[Choice(choices: Secure3DEnum::PREORDER_PURCHASE_INDICATORS)]
    private ?string $preOrderPurchaseIndicator = null;
    private ?string $preOrderDate              = null;
    private ?string $giftCardAmount            = null;
    private ?string $giftCardCurrency          = null;
    private ?string $giftCardCount             = null;
    private ?string $purchaseDate              = null;
    private ?string $recurringExpiry           = null;
    private ?string $recurringFrequency        = null;

    #[Choice(choices: Secure3DEnum::TRANS_TYPES)]
    private ?string $transType = null;

    #[Choice(choices: Secure3DEnum::EXEMPTION_INDICATORS)]
    private ?string $exemptionIndicator = null;

    /**
     * @return string|null
     */
    public function getSecure3D(): ?string
    {
        return $this->secure3D;
    }

    /**
     * @param string|null $secure3D
     */
    public function setSecure3D(?string $secure3D): void
    {
        $this->secure3D = $secure3D;
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string|null $channel
     */
    public function setChannel(?string $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return string|null
     */
    public function getAuthenticationIndicator(): ?string
    {
        return $this->authenticationIndicator;
    }

    /**
     * @param string|null $authenticationIndicator
     */
    public function setAuthenticationIndicator(?string $authenticationIndicator): void
    {
        $this->authenticationIndicator = $authenticationIndicator;
    }

    /**
     * @return string|null
     */
    public function getCardholderAuthenticationMethod(): ?string
    {
        return $this->cardholderAuthenticationMethod;
    }

    /**
     * @param string|null $cardholderAuthenticationMethod
     */
    public function setCardholderAuthenticationMethod(?string $cardholderAuthenticationMethod): void
    {
        $this->cardholderAuthenticationMethod = $cardholderAuthenticationMethod;
    }

    /**
     * @return string|null
     */
    public function getChallengeIndicator(): ?string
    {
        return $this->challengeIndicator;
    }

    /**
     * @param string|null $challengeIndicator
     */
    public function setChallengeIndicator(?string $challengeIndicator): void
    {
        $this->challengeIndicator = $challengeIndicator;
    }

    /**
     * @return string|null
     */
    public function getPriorAuthenticationMethod(): ?string
    {
        return $this->priorAuthenticationMethod;
    }

    /**
     * @param string|null $priorAuthenticationMethod
     */
    public function setPriorAuthenticationMethod(?string $priorAuthenticationMethod): void
    {
        $this->priorAuthenticationMethod = $priorAuthenticationMethod;
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountType(): ?string
    {
        return $this->cardholderAccountType;
    }

    /**
     * @param string|null $cardholderAccountType
     */
    public function setCardholderAccountType(?string $cardholderAccountType): void
    {
        $this->cardholderAccountType = $cardholderAccountType;
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountAgeIndicator(): ?string
    {
        return $this->cardholderAccountAgeIndicator;
    }

    /**
     * @param string|null $cardholderAccountAgeIndicator
     */
    public function setCardholderAccountAgeIndicator(?string $cardholderAccountAgeIndicator): void
    {
        $this->cardholderAccountAgeIndicator = $cardholderAccountAgeIndicator;
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountChangeIndicator(): ?string
    {
        return $this->cardholderAccountChangeIndicator;
    }

    /**
     * @param string|null $cardholderAccountChangeIndicator
     */
    public function setCardholderAccountChangeIndicator(?string $cardholderAccountChangeIndicator): void
    {
        $this->cardholderAccountChangeIndicator = $cardholderAccountChangeIndicator;
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountPasswordChangeIndicator(): ?string
    {
        return $this->cardholderAccountPasswordChangeIndicator;
    }

    /**
     * @param string|null $cardholderAccountPasswordChangeIndicator
     */
    public function setCardholderAccountPasswordChangeIndicator(?string $cardholderAccountPasswordChangeIndicator): void
    {
        $this->cardholderAccountPasswordChangeIndicator = $cardholderAccountPasswordChangeIndicator;
    }

    /**
     * @return string|null
     */
    public function getCardholderAuthenticationDateTime(): ?string
    {
        return $this->cardholderAuthenticationDateTime;
    }

    /**
     * @param string|null $cardholderAuthenticationDateTime
     */
    public function setCardholderAuthenticationDateTime(\DateTimeInterface $cardholderAuthenticationDateTime): void
    {
        $this->cardholderAuthenticationDateTime = $cardholderAuthenticationDateTime->format('Y-m-d H:i');
    }

    /**
     * @return string|null
     */
    public function getCardHolderAuthenticationData(): ?string
    {
        return $this->cardHolderAuthenticationData;
    }

    /**
     * @param string|null $cardHolderAuthenticationData
     */
    public function setCardHolderAuthenticationData(?string $cardHolderAuthenticationData): void
    {
        $this->cardHolderAuthenticationData = $cardHolderAuthenticationData;
    }

    /**
     * @return string|null
     */
    public function getPriorAuthenticationDateTime(): ?string
    {
        return $this->priorAuthenticationDateTime;
    }

    /**
     * @param string|null $priorAuthenticationDateTime
     */
    public function setPriorAuthenticationDateTime(\DateTimeInterface $priorAuthenticationDateTime): void
    {
        $this->priorAuthenticationDateTime = $priorAuthenticationDateTime->format('Y-m-d H:i');
    }

    /**
     * @return string|null
     */
    public function getPriorAuthenticationData(): ?string
    {
        return $this->priorAuthenticationData;
    }

    /**
     * @param string|null $priorAuthenticationData
     */
    public function setPriorAuthenticationData(?string $priorAuthenticationData): void
    {
        $this->priorAuthenticationData = $priorAuthenticationData;
    }

    /**
     * @return string|null
     */
    public function getPriorReference(): ?string
    {
        return $this->priorReference;
    }

    /**
     * @param string|null $priorReference
     */
    public function setPriorReference(?string $priorReference): void
    {
        $this->priorReference = $priorReference;
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountDate(): ?string
    {
        return $this->cardholderAccountDate;
    }

    /**
     * @param string|null $cardholderAccountDate
     */
    public function setCardholderAccountDate(\DateTimeInterface $cardholderAccountDate): void
    {
        $this->cardholderAccountDate = $cardholderAccountDate->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountLastChange(): ?string
    {
        return $this->cardholderAccountLastChange;
    }

    /**
     * @param string|null $cardholderAccountLastChange
     */
    public function setCardholderAccountLastChange(\DateTimeInterface $cardholderAccountLastChange): void
    {
        $this->cardholderAccountLastChange = $cardholderAccountLastChange->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getCardholderAccountLastPasswordChange(): ?string
    {
        return $this->cardholderAccountLastPasswordChange;
    }

    /**
     * @param string|null $cardholderAccountLastPasswordChange
     */
    public function setCardholderAccountLastPasswordChange(\DateTimeInterface $cardholderAccountLastPasswordChange): void
    {
        $this->cardholderAccountLastPasswordChange = $cardholderAccountLastPasswordChange->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getShippingAddressUsageIndicator(): ?string
    {
        return $this->shippingAddressUsageIndicator;
    }

    /**
     * @param string|null $shippingAddressUsageIndicator
     */
    public function setShippingAddressUsageIndicator(?string $shippingAddressUsageIndicator): void
    {
        $this->shippingAddressUsageIndicator = $shippingAddressUsageIndicator;
    }

    /**
     * @return string|null
     */
    public function getShippingAddressFirstUsage(): ?string
    {
        return $this->shippingAddressFirstUsage;
    }

    /**
     * @param string|null $shippingAddressFirstUsage
     */
    public function setShippingAddressFirstUsage(\DateTimeInterface $shippingAddressFirstUsage): void
    {
        $this->shippingAddressFirstUsage = $shippingAddressFirstUsage->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getTransactionActivityDay(): ?string
    {
        return $this->transactionActivityDay;
    }

    /**
     * @param string|null $transactionActivityDay
     */
    public function setTransactionActivityDay(?string $transactionActivityDay): void
    {
        $this->transactionActivityDay = $transactionActivityDay;
    }

    /**
     * @return string|null
     */
    public function getTransactionActivityYear(): ?string
    {
        return $this->transactionActivityYear;
    }

    /**
     * @param string|null $transactionActivityYear
     */
    public function setTransactionActivityYear(?string $transactionActivityYear): void
    {
        $this->transactionActivityYear = $transactionActivityYear;
    }

    /**
     * @return string|null
     */
    public function getAddCardAttemptsDay(): ?string
    {
        return $this->addCardAttemptsDay;
    }

    /**
     * @param string|null $addCardAttemptsDay
     */
    public function setAddCardAttemptsDay(?string $addCardAttemptsDay): void
    {
        $this->addCardAttemptsDay = $addCardAttemptsDay;
    }

    /**
     * @return string|null
     */
    public function getPurchaseCountSixMonths(): ?string
    {
        return $this->purchaseCountSixMonths;
    }

    /**
     * @param string|null $purchaseCountSixMonths
     */
    public function setPurchaseCountSixMonths(?string $purchaseCountSixMonths): void
    {
        $this->purchaseCountSixMonths = $purchaseCountSixMonths;
    }

    /**
     * @return string|null
     */
    public function getSuspiciousAccountActivityIndicator(): ?string
    {
        return $this->suspiciousAccountActivityIndicator;
    }

    /**
     * @param string|null $suspiciousAccountActivityIndicator
     */
    public function setSuspiciousAccountActivityIndicator(?string $suspiciousAccountActivityIndicator): void
    {
        $this->suspiciousAccountActivityIndicator = $suspiciousAccountActivityIndicator;
    }

    /**
     * @return string|null
     */
    public function getShippingNameEqualIndicator(): ?string
    {
        return $this->shippingNameEqualIndicator;
    }

    /**
     * @param string|null $shippingNameEqualIndicator
     */
    public function setShippingNameEqualIndicator(?string $shippingNameEqualIndicator): void
    {
        $this->shippingNameEqualIndicator = $shippingNameEqualIndicator;
    }

    /**
     * @return string|null
     */
    public function getPaymentAccountAgeIndicator(): ?string
    {
        return $this->paymentAccountAgeIndicator;
    }

    /**
     * @param string|null $paymentAccountAgeIndicator
     */
    public function setPaymentAccountAgeIndicator(?string $paymentAccountAgeIndicator): void
    {
        $this->paymentAccountAgeIndicator = $paymentAccountAgeIndicator;
    }

    /**
     * @return string|null
     */
    public function getPaymentAccountAgeDate(): ?string
    {
        return $this->paymentAccountAgeDate;
    }

    /**
     * @param string|null $paymentAccountAgeDate
     */
    public function setPaymentAccountAgeDate(\DateTimeInterface $paymentAccountAgeDate): void
    {
        $this->paymentAccountAgeDate = $paymentAccountAgeDate->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getBillingAddressLine3(): ?string
    {
        return $this->billingAddressLine3;
    }

    /**
     * @param string|null $billingAddressLine3
     */
    public function setBillingAddressLine3(?string $billingAddressLine3): void
    {
        $this->billingAddressLine3 = $billingAddressLine3;
    }

    /**
     * @return string|null
     */
    public function getShippingAddressLine3(): ?string
    {
        return $this->shippingAddressLine3;
    }

    /**
     * @param string|null $shippingAddressLine3
     */
    public function setShippingAddressLine3(?string $shippingAddressLine3): void
    {
        $this->shippingAddressLine3 = $shippingAddressLine3;
    }

    /**
     * @return string|null
     */
    public function getBillingShippingAddressMatch(): ?string
    {
        return $this->billingShippingAddressMatch;
    }

    /**
     * @param string|null $billingShippingAddressMatch
     */
    public function setBillingShippingAddressMatch(?string $billingShippingAddressMatch): void
    {
        $this->billingShippingAddressMatch = $billingShippingAddressMatch;
    }

    /**
     * @return string|null
     */
    public function getHomePhoneCountryPrefix(): ?string
    {
        return $this->homePhoneCountryPrefix;
    }

    /**
     * @param string|null $homePhoneCountryPrefix
     */
    public function setHomePhoneCountryPrefix(?string $homePhoneCountryPrefix): void
    {
        $this->homePhoneCountryPrefix = $homePhoneCountryPrefix;
    }

    /**
     * @return string|null
     */
    public function getHomePhoneNumber(): ?string
    {
        return $this->homePhoneNumber;
    }

    /**
     * @param string|null $homePhoneNumber
     */
    public function setHomePhoneNumber(?string $homePhoneNumber): void
    {
        $this->homePhoneNumber = $homePhoneNumber;
    }

    /**
     * @return string|null
     */
    public function getMobilePhoneCountryPrefix(): ?string
    {
        return $this->mobilePhoneCountryPrefix;
    }

    /**
     * @param string|null $mobilePhoneCountryPrefix
     */
    public function setMobilePhoneCountryPrefix(?string $mobilePhoneCountryPrefix): void
    {
        $this->mobilePhoneCountryPrefix = $mobilePhoneCountryPrefix;
    }

    /**
     * @return string|null
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string|null $mobilePhoneNumber
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber): void
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
    }

    /**
     * @return string|null
     */
    public function getWorkPhoneCountryPrefix(): ?string
    {
        return $this->workPhoneCountryPrefix;
    }

    /**
     * @param string|null $workPhoneCountryPrefix
     */
    public function setWorkPhoneCountryPrefix(?string $workPhoneCountryPrefix): void
    {
        $this->workPhoneCountryPrefix = $workPhoneCountryPrefix;
    }

    /**
     * @return string|null
     */
    public function getWorkPhoneNumber(): ?string
    {
        return $this->workPhoneNumber;
    }

    /**
     * @param string|null $workPhoneNumber
     */
    public function setWorkPhoneNumber(?string $workPhoneNumber): void
    {
        $this->workPhoneNumber = $workPhoneNumber;
    }

    /**
     * @return string|null
     */
    public function getPurchaseInstalData(): ?string
    {
        return $this->purchaseInstalData;
    }

    /**
     * @param string|null $purchaseInstalData
     */
    public function setPurchaseInstalData(?string $purchaseInstalData): void
    {
        $this->purchaseInstalData = $purchaseInstalData;
    }

    /**
     * @return string|null
     */
    public function getShipIndicator(): ?string
    {
        return $this->shipIndicator;
    }

    /**
     * @param string|null $shipIndicator
     */
    public function setShipIndicator(?string $shipIndicator): void
    {
        $this->shipIndicator = $shipIndicator;
    }

    /**
     * @return string|null
     */
    public function getDeliveryTimeframe(): ?string
    {
        return $this->deliveryTimeframe;
    }

    /**
     * @param string|null $deliveryTimeframe
     */
    public function setDeliveryTimeframe(?string $deliveryTimeframe): void
    {
        $this->deliveryTimeframe = $deliveryTimeframe;
    }

    /**
     * @return string|null
     */
    public function getDeliveryEmailAddress(): ?string
    {
        return $this->deliveryEmailAddress;
    }

    /**
     * @param string|null $deliveryEmailAddress
     */
    public function setDeliveryEmailAddress(?string $deliveryEmailAddress): void
    {
        $this->deliveryEmailAddress = $deliveryEmailAddress;
    }

    /**
     * @return string|null
     */
    public function getReorderItemsIndicator(): ?string
    {
        return $this->reorderItemsIndicator;
    }

    /**
     * @param string|null $reorderItemsIndicator
     */
    public function setReorderItemsIndicator(?string $reorderItemsIndicator): void
    {
        $this->reorderItemsIndicator = $reorderItemsIndicator;
    }

    /**
     * @return string|null
     */
    public function getPreOrderPurchaseIndicator(): ?string
    {
        return $this->preOrderPurchaseIndicator;
    }

    /**
     * @param string|null $preOrderPurchaseIndicator
     */
    public function setPreOrderPurchaseIndicator(?string $preOrderPurchaseIndicator): void
    {
        $this->preOrderPurchaseIndicator = $preOrderPurchaseIndicator;
    }

    public function getPreOrderDate(): ?string
    {
        return $this->preOrderDate;
    }

    public function setPreOrderDate(\DateTimeInterface $preOrderDate): void
    {
        $this->preOrderDate = $preOrderDate->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getGiftCardAmount(): ?string
    {
        return $this->giftCardAmount;
    }

    /**
     * @param string|null $giftCardAmount
     */
    public function setGiftCardAmount(?string $giftCardAmount): void
    {
        $this->giftCardAmount = $giftCardAmount;
    }

    /**
     * @return string|null
     */
    public function getGiftCardCurrency(): ?string
    {
        return $this->giftCardCurrency;
    }

    /**
     * @param string|null $giftCardCurrency
     */
    public function setGiftCardCurrency(?string $giftCardCurrency): void
    {
        $this->giftCardCurrency = $giftCardCurrency;
    }

    /**
     * @return string|null
     */
    public function getGiftCardCount(): ?string
    {
        return $this->giftCardCount;
    }

    /**
     * @param string|null $giftCardCount
     */
    public function setGiftCardCount(?string $giftCardCount): void
    {
        $this->giftCardCount = $giftCardCount;
    }

    public function getPurchaseDate(): ?string
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate(\DateTimeInterface $purchaseDate): void
    {
        $this->purchaseDate = $purchaseDate->format('Y-m-d H:i');
    }

    public function getRecurringExpiry(): ?string
    {
        return $this->recurringExpiry;
    }

    public function setRecurringExpiry(\DateTimeInterface $recurringExpiry): void
    {
        $this->recurringExpiry = $recurringExpiry->format('Y-m-d');
    }

    /**
     * @return string|null
     */
    public function getRecurringFrequency(): ?string
    {
        return $this->recurringFrequency;
    }

    /**
     * @param string|null $recurringFrequency
     */
    public function setRecurringFrequency(?string $recurringFrequency): void
    {
        $this->recurringFrequency = $recurringFrequency;
    }

    /**
     * @return string|null
     */
    public function getTransType(): ?string
    {
        return $this->transType;
    }

    /**
     * @param string|null $transType
     */
    public function setTransType(?string $transType): void
    {
        $this->transType = $transType;
    }

    /**
     * @return string|null
     */
    public function getExemptionIndicator(): ?string
    {
        return $this->exemptionIndicator;
    }

    /**
     * @param string|null $exemptionIndicator
     */
    public function setExemptionIndicator(?string $exemptionIndicator): void
    {
        $this->exemptionIndicator = $exemptionIndicator;
    }

    public function jsonSerialize(): array
    {
        return array_filter(get_object_vars($this), static fn($value) => !empty($value));
    }
}