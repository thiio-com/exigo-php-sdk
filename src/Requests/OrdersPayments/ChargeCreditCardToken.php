<?php

namespace Thiio\Exigo\Requests\OrdersPayments;

use Thiio\Exigo\Requests\ExigoRequest;

class ChargeCreditCardToken extends ExigoRequest
{
    
    const ENDPOINT = self::API_VERSION."/payment/charge/token";

    public $creditCardToken;
    public $billingName;
    public $billingAddress;
    public $billingAddress2;
    public $billingCity;
    public $billingState;
    public $billingZip;
    public $billingCountry;
    public $cvcCode;
    public $issueNumber;
    public $creditCardType;
    public $expirationMonth;
    public $expirationYear;
    public $orderID;
    public $maxAmount;
    public $merchantWarehouseIDOverride;
    public $clientIPAddress;
    public $otherData1;
    public $otherData2;
    public $otherData3;
    public $otherData4;
    public $otherData5;
    public $otherData6;
    public $otherData7;
    public $otherData8;
    public $otherData9;
    public $otherData10;
    public $orderKey;


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
    public function setCreditCardToken($creditCardToken)
    {
        $this->creditCardToken = $creditCardToken;

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
    public function setBillingName($billingName)
    {
        $this->billingName = $billingName;

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
    public function setBillingAddress($billingAddress)
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
    public function setBillingAddress2($billingAddress2)
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
    public function setBillingCity($billingCity)
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
    public function setBillingState($billingState)
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
    public function setBillingZip($billingZip)
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
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    /**
     * Get the value of cvcCode
     */ 
    public function getCvcCode()
    {
        return $this->cvcCode;
    }

    /**
     * Set the value of cvcCode
     *
     * @return  self
     */ 
    public function setCvcCode($cvcCode)
    {
        $this->cvcCode = $cvcCode;

        return $this;
    }

    /**
     * Get the value of issueNumber
     */ 
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * Set the value of issueNumber
     *
     * @return  self
     */ 
    public function setIssueNumber($issueNumber)
    {
        $this->issueNumber = $issueNumber;

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
    public function setCreditCardType($creditCardType)
    {
        $this->creditCardType = $creditCardType;

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
    public function setExpirationMonth($expirationMonth)
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
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    /**
     * Get the value of orderID
     */ 
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * Set the value of orderID
     *
     * @return  self
     */ 
    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;

        return $this;
    }

    /**
     * Get the value of maxAmount
     */ 
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }

    /**
     * Set the value of maxAmount
     *
     * @return  self
     */ 
    public function setMaxAmount($maxAmount)
    {
        $this->maxAmount = $maxAmount;

        return $this;
    }

    /**
     * Get the value of merchantWarehouseIDOverride
     */ 
    public function getMerchantWarehouseIDOverride()
    {
        return $this->merchantWarehouseIDOverride;
    }

    /**
     * Set the value of merchantWarehouseIDOverride
     *
     * @return  self
     */ 
    public function setMerchantWarehouseIDOverride($merchantWarehouseIDOverride)
    {
        $this->merchantWarehouseIDOverride = $merchantWarehouseIDOverride;

        return $this;
    }

    /**
     * Get the value of clientIPAddress
     */ 
    public function getClientIPAddress()
    {
        return $this->clientIPAddress;
    }

    /**
     * Set the value of clientIPAddress
     *
     * @return  self
     */ 
    public function setClientIPAddress($clientIPAddress)
    {
        $this->clientIPAddress = $clientIPAddress;

        return $this;
    }

    /**
     * Get the value of otherData1
     */ 
    public function getOtherData1()
    {
        return $this->otherData1;
    }

    /**
     * Set the value of otherData1
     *
     * @return  self
     */ 
    public function setOtherData1($otherData1)
    {
        $this->otherData1 = $otherData1;

        return $this;
    }

    /**
     * Get the value of otherData2
     */ 
    public function getOtherData2()
    {
        return $this->otherData2;
    }

    /**
     * Set the value of otherData2
     *
     * @return  self
     */ 
    public function setOtherData2($otherData2)
    {
        $this->otherData2 = $otherData2;

        return $this;
    }

    /**
     * Get the value of otherData3
     */ 
    public function getOtherData3()
    {
        return $this->otherData3;
    }

    /**
     * Set the value of otherData3
     *
     * @return  self
     */ 
    public function setOtherData3($otherData3)
    {
        $this->otherData3 = $otherData3;

        return $this;
    }

    /**
     * Get the value of otherData4
     */ 
    public function getOtherData4()
    {
        return $this->otherData4;
    }

    /**
     * Set the value of otherData4
     *
     * @return  self
     */ 
    public function setOtherData4($otherData4)
    {
        $this->otherData4 = $otherData4;

        return $this;
    }

    /**
     * Get the value of otherData5
     */ 
    public function getOtherData5()
    {
        return $this->otherData5;
    }

    /**
     * Set the value of otherData5
     *
     * @return  self
     */ 
    public function setOtherData5($otherData5)
    {
        $this->otherData5 = $otherData5;

        return $this;
    }

    /**
     * Get the value of otherData6
     */ 
    public function getOtherData6()
    {
        return $this->otherData6;
    }

    /**
     * Set the value of otherData6
     *
     * @return  self
     */ 
    public function setOtherData6($otherData6)
    {
        $this->otherData6 = $otherData6;

        return $this;
    }

    /**
     * Get the value of otherData7
     */ 
    public function getOtherData7()
    {
        return $this->otherData7;
    }

    /**
     * Set the value of otherData7
     *
     * @return  self
     */ 
    public function setOtherData7($otherData7)
    {
        $this->otherData7 = $otherData7;

        return $this;
    }

    /**
     * Get the value of otherData8
     */ 
    public function getOtherData8()
    {
        return $this->otherData8;
    }

    /**
     * Set the value of otherData8
     *
     * @return  self
     */ 
    public function setOtherData8($otherData8)
    {
        $this->otherData8 = $otherData8;

        return $this;
    }

    /**
     * Get the value of otherData9
     */ 
    public function getOtherData9()
    {
        return $this->otherData9;
    }

    /**
     * Set the value of otherData9
     *
     * @return  self
     */ 
    public function setOtherData9($otherData9)
    {
        $this->otherData9 = $otherData9;

        return $this;
    }

    /**
     * Get the value of otherData10
     */ 
    public function getOtherData10()
    {
        return $this->otherData10;
    }

    /**
     * Set the value of otherData10
     *
     * @return  self
     */ 
    public function setOtherData10($otherData10)
    {
        $this->otherData10 = $otherData10;

        return $this;
    }

    /**
     * Get the value of orderKey
     */ 
    public function getOrderKey()
    {
        return $this->orderKey;
    }

    /**
     * Set the value of orderKey
     *
     * @return  self
     */ 
    public function setOrderKey($orderKey)
    {
        $this->orderKey = $orderKey;

        return $this;
    }
}
