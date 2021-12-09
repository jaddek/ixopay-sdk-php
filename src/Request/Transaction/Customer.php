<?php

declare(strict_types=1);

namespace Jaddek\Ixopay\Http\Request\Transaction;

use Jaddek\Ixopay\Http\Enum\GenderEnum;
use Jaddek\Ixopay\Http\SerializableTrait;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class Customer implements \JsonSerializable
{
    use SerializableTrait;

    #[Length(max: 36)]
    private ?string $identification;

    #[Length(max: 50)]
    private ?string $firstName;

    #[Length(max: 50)]
    private ?string $lastName;

    #[Length(max: 50)]
    private ?string $birthDate = null;

    #[Length(max: 1), Choice(choices: GenderEnum::GENDERS)]
    private string $gender;

    #[Length(max: 50)]
    private ?string $billingAddress1;

    #[Length(max: 50)]
    private ?string $billingAddress2;

    #[Length(max: 30)]
    private ?string $billingCity;

    #[Length(max: 8)]
    private ?string $billingPostcode;

    #[Length(max: 30)]
    private ?string $billingState;

    #[Length(min: 2, max: 2)]
    private ?string $billingCountry;

    #[Length(max: 20)]
    private ?string $billingPhone;

    #[Length(max: 50)]
    private ?string $shippingFirstName;

    #[Length(max: 50)]
    private ?string $shippingLastName;

    #[Length(max: 50)]
    private ?string $shippingCompany;

    #[Length(max: 50)]
    private ?string $shippingAddress1;

    #[Length(max: 50)]
    private ?string $shippingAddress2;

    #[Length(max: 30)]
    private ?string $shippingCity;

    #[Length(max: 8)]
    private ?string $shippingPostcode;

    #[Length(max: 50)]
    private ?string $shippingState;

    #[Length(min: 2, max: 2)]
    private ?string $shippingCountry;

    #[Length(max: 20)]
    private ?string $shippingPhone;

    #[Length(max: 50)]
    private ?string $company;

    #[Email]
    private ?string $email;

    private ?string $ipAddress;

    #[Length(max: 14)]
    private ?string $nationalId;

    private array $extraData = [];

    private bool $emailVerified = false;

    private ?Payment $paymentData = null;

    /**
     * @return string|null
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * @param string|null $identification
     */
    public function setIdentification(?string $identification): void
    {
        $this->identification = $identification;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @param string|null $birthDate
     */
    public function setBirthDate(\DateTimeInterface $birthDate): void
    {
        $this->birthDate = $birthDate->format('Y-m-d');
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string|null
     */
    public function getBillingAddress1(): ?string
    {
        return $this->billingAddress1;
    }

    /**
     * @param string|null $billingAddress1
     */
    public function setBillingAddress1(?string $billingAddress1): void
    {
        $this->billingAddress1 = $billingAddress1;
    }

    /**
     * @return string|null
     */
    public function getBillingAddress2(): ?string
    {
        return $this->billingAddress2;
    }

    /**
     * @param string|null $billingAddress2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2 = $billingAddress2;
    }

    /**
     * @return string|null
     */
    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    /**
     * @param string|null $billingCity
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    /**
     * @return string|null
     */
    public function getBillingPostcode(): ?string
    {
        return $this->billingPostcode;
    }

    /**
     * @param string|null $billingPostcode
     */
    public function setBillingPostcode(?string $billingPostcode): void
    {
        $this->billingPostcode = $billingPostcode;
    }

    /**
     * @return string|null
     */
    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    /**
     * @param string|null $billingState
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState = $billingState;
    }

    /**
     * @return string|null
     */
    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    /**
     * @param string|null $billingCountry
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
    }

    /**
     * @return string|null
     */
    public function getBillingPhone(): ?string
    {
        return $this->billingPhone;
    }

    /**
     * @param string|null $billingPhone
     */
    public function setBillingPhone(?string $billingPhone): void
    {
        $this->billingPhone = $billingPhone;
    }

    /**
     * @return string|null
     */
    public function getShippingFirstName(): ?string
    {
        return $this->shippingFirstName;
    }

    /**
     * @param string|null $shippingFirstName
     */
    public function setShippingFirstName(?string $shippingFirstName): void
    {
        $this->shippingFirstName = $shippingFirstName;
    }

    /**
     * @return string|null
     */
    public function getShippingLastName(): ?string
    {
        return $this->shippingLastName;
    }

    /**
     * @param string|null $shippingLastName
     */
    public function setShippingLastName(?string $shippingLastName): void
    {
        $this->shippingLastName = $shippingLastName;
    }

    /**
     * @return string|null
     */
    public function getShippingCompany(): ?string
    {
        return $this->shippingCompany;
    }

    /**
     * @param string|null $shippingCompany
     */
    public function setShippingCompany(?string $shippingCompany): void
    {
        $this->shippingCompany = $shippingCompany;
    }

    /**
     * @return string|null
     */
    public function getShippingAddress1(): ?string
    {
        return $this->shippingAddress1;
    }

    /**
     * @param string|null $shippingAddress1
     */
    public function setShippingAddress1(?string $shippingAddress1): void
    {
        $this->shippingAddress1 = $shippingAddress1;
    }

    /**
     * @return string|null
     */
    public function getShippingAddress2(): ?string
    {
        return $this->shippingAddress2;
    }

    /**
     * @param string|null $shippingAddress2
     */
    public function setShippingAddress2(?string $shippingAddress2): void
    {
        $this->shippingAddress2 = $shippingAddress2;
    }

    /**
     * @return string|null
     */
    public function getShippingCity(): ?string
    {
        return $this->shippingCity;
    }

    /**
     * @param string|null $shippingCity
     */
    public function setShippingCity(?string $shippingCity): void
    {
        $this->shippingCity = $shippingCity;
    }

    /**
     * @return string|null
     */
    public function getShippingPostcode(): ?string
    {
        return $this->shippingPostcode;
    }

    /**
     * @param string|null $shippingPostcode
     */
    public function setShippingPostcode(?string $shippingPostcode): void
    {
        $this->shippingPostcode = $shippingPostcode;
    }

    /**
     * @return string|null
     */
    public function getShippingState(): ?string
    {
        return $this->shippingState;
    }

    /**
     * @param string|null $shippingState
     */
    public function setShippingState(?string $shippingState): void
    {
        $this->shippingState = $shippingState;
    }

    /**
     * @return string|null
     */
    public function getShippingCountry(): ?string
    {
        return $this->shippingCountry;
    }

    /**
     * @param string|null $shippingCountry
     */
    public function setShippingCountry(?string $shippingCountry): void
    {
        $this->shippingCountry = $shippingCountry;
    }

    /**
     * @return string|null
     */
    public function getShippingPhone(): ?string
    {
        return $this->shippingPhone;
    }

    /**
     * @param string|null $shippingPhone
     */
    public function setShippingPhone(?string $shippingPhone): void
    {
        $this->shippingPhone = $shippingPhone;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string|null
     */
    public function getNationalId(): ?string
    {
        return $this->nationalId;
    }

    /**
     * @param string|null $nationalId
     */
    public function setNationalId(?string $nationalId): void
    {
        $this->nationalId = $nationalId;
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

    /**
     * @return bool
     */
    public function isEmailVerified(): bool
    {
        return $this->emailVerified;
    }

    /**
     * @param bool $emailVerified
     */
    public function setEmailVerified(bool $emailVerified): void
    {
        $this->emailVerified = $emailVerified;
    }

    /**
     * @return Payment|null
     */
    public function getPaymentData(): ?Payment
    {
        return $this->paymentData;
    }

    /**
     * @param Payment|null $paymentData
     */
    public function setPaymentData(?Payment $paymentData): void
    {
        $this->paymentData = $paymentData;
    }
}