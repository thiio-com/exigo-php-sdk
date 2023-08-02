<?php

namespace Thiio\Exigo\Requests\Customers;

use Thiio\Exigo\Requests\ExigoRequest;

class SetAccountCreditCardToken extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/account/cctoken";

    public $customerID;
    public $creditCardAccountType;
    public $creditCardToken;
    public $expirationMonth;
    public $expirationYear;
    public $creditCardType;
    public $billingName;
    public $useMainAddress;
    public $billingAddress;
    public $billingAddress2;
    public $billingCity;
    public $billingState;
    public $billingZip;
    public $billingCountry;
    public $hideFromWeb;
    public $customerKey;
    public $movePrimaryToSecondary;
    public $tokenType;
    public $firstSix;
    public $lastFour;



    /**
     * Get the value of customerID
     */ 
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Set the value of customerID
     *
     * @return  self
     */ 
    public function setCustomerID(int $customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }

    /**
     * Get the value of creditCardAccountType
     */ 
    public function getCreditCardAccountType()
    {
        return $this->creditCardAccountType;
    }

    /**
     * Set the value of creditCardAccountType
     *
     * @return  self
     */ 
    public function setCreditCardAccountType(string $creditCardAccountType)
    {
        $this->creditCardAccountType = $creditCardAccountType;

        return $this;
    }

    /**
     * Get the value of creditCardToken
     */ 
    public function getCreditCardToken()
    {
        return $this->creditCardToken;
    }

    /**
     * Set the value of creditCardToken
     *
     * @return  self
     */ 
    public function setCreditCardToken(string $creditCardToken)
    {
        $this->creditCardToken = $creditCardToken;

        return $this;
    }

    /**
     * Get the value of expirationMonth
     */ 
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * Set the value of expirationMonth
     *
     * @return  self
     */ 
    public function setExpirationMonth(int $expirationMonth)
    {
        $this->expirationMonth = $expirationMonth;

        return $this;
    }

    /**
     * Get the value of expirationYear
     */ 
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * Set the value of expirationYear
     *
     * @return  self
     */ 
    public function setExpirationYear(int $expirationYear)
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    /**
     * Get the value of creditCardType
     */ 
    public function getCreditCardType()
    {
        return $this->creditCardType;
    }

    /**
     * Set the value of creditCardType
     *
     * @return  self
     */ 
    public function setCreditCardType(int $creditCardType)
    {
        $this->creditCardType = $creditCardType;

        return $this;
    }

    /**
     * Get the value of billingName
     */ 
    public function getBillingName()
    {
        return $this->billingName;
    }

    /**
     * Set the value of billingName
     *
     * @return  self
     */ 
    public function setBillingName(string $billingName)
    {
        $this->billingName = $billingName;

        return $this;
    }

    /**
     * Get the value of useMainAddress
     */ 
    public function getUseMainAddress()
    {
        return $this->useMainAddress;
    }

    /**
     * Set the value of useMainAddress
     *
     * @return  self
     */ 
    public function setUseMainAddress(bool $useMainAddress)
    {
        $this->useMainAddress = $useMainAddress;

        return $this;
    }

    /**
     * Get the value of billingAddress
     */ 
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set the value of billingAddress
     *
     * @return  self
     */ 
    public function setBillingAddress(string $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get the value of billingAddress2
     */ 
    public function getBillingAddress2()
    {
        return $this->billingAddress2;
    }

    /**
     * Set the value of billingAddress2
     *
     * @return  self
     */ 
    public function setBillingAddress2(string $billingAddress2)
    {
        $this->billingAddress2 = $billingAddress2;

        return $this;
    }

    /**
     * Get the value of billingCity
     */ 
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Set the value of billingCity
     *
     * @return  self
     */ 
    public function setBillingCity(string $billingCity)
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    /**
     * Get the value of billingState
     */ 
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * Set the value of billingState
     *
     * @return  self
     */ 
    public function setBillingState(string $billingState)
    {
        $this->billingState = $billingState;

        return $this;
    }

    /**
     * Get the value of billingZip
     */ 
    public function getBillingZip()
    {
        return $this->billingZip;
    }

    /**
     * Set the value of billingZip
     *
     * @return  self
     */ 
    public function setBillingZip(string $billingZip)
    {
        $this->billingZip = $billingZip;

        return $this;
    }

    /**
     * Get the value of billingCountry
     */ 
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * Set the value of billingCountry
     *
     * @return  self
     */ 
    public function setBillingCountry(string $billingCountry)
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    /**
     * Get the value of hideFromWeb
     */ 
    public function getHideFromWeb()
    {
        return $this->hideFromWeb;
    }

    /**
     * Set the value of hideFromWeb
     *
     * @return  self
     */ 
    public function setHideFromWeb(bool $hideFromWeb)
    {
        $this->hideFromWeb = $hideFromWeb;

        return $this;
    }

    /**
     * Get the value of customerKey
     */ 
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Set the value of customerKey
     *
     * @return  self
     */ 
    public function setCustomerKey(string $customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get the value of movePrimaryToSecondary
     */ 
    public function getMovePrimaryToSecondary()
    {
        return $this->movePrimaryToSecondary;
    }

    /**
     * Set the value of movePrimaryToSecondary
     *
     * @return  self
     */ 
    public function setMovePrimaryToSecondary(bool $movePrimaryToSecondary)
    {
        $this->movePrimaryToSecondary = $movePrimaryToSecondary;

        return $this;
    }

    /**
     * Get the value of tokenType
     */ 
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * Set the value of tokenType
     *
     * @return  self
     */ 
    public function setTokenType(int $tokenType)
    {
        $this->tokenType = $tokenType;

        return $this;
    }

    /**
     * Get the value of firstSix
     */ 
    public function getFirstSix()
    {
        return $this->firstSix;
    }

    /**
     * Set the value of firstSix
     *
     * @return  self
     */ 
    public function setFirstSix(string $firstSix)
    {
        $this->firstSix = $firstSix;

        return $this;
    }

    /**
     * Get the value of lastFour
     */ 
    public function getLastFour()
    {
        return $this->lastFour;
    }

    /**
     * Set the value of lastFour
     *
     * @return  self
     */ 
    public function setLastFour(string $lastFour)
    {
        $this->lastFour = $lastFour;

        return $this;
    }
}
