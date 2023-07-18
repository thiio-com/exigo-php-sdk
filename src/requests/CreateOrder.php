<?php

namespace Thiio\Exigo\Requests;

class CreateOrder extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/orders";

    public $customerID;
    public $orderStatus;
    public $orderDate;
    public $currencyCode;
    public $warehouseID;
    public $shipMethodID;
    public $priceType;
    public $firstName;
    public $middleName;
    public $lastName;
    public $nameSuffix;
    public $company;
    public $address1;
    public $address2;
    public $address3;
    public $city;
    public $state;
    public $zip;
    public $country;
    public $county;
    public $email;
    public $phone;
    public $notes;
    public $other11;
    public $other12;
    public $other13;
    public $other14;
    public $other15;
    public $other16;
    public $other17;
    public $other18;
    public $other19;
    public $other20;
    public $orderType;
    public $taxRateOverride;
    public $shippingAmountOverride;
    public $useManualOrderID;
    public $manualOrderID;
    public $transferVolumeToID;
    public $returnOrderID;
    public $overwriteExistingOrder;
    public $existingOrderID;
    public $partyID;
    public $details;
    public $suppressPackSlipPrice;
    public $transferVolumeToKey;
    public $returnOrderKey;
    public $manualOrderKey;
    public $existingOrderKey;
    public $customerKey;
    public $orderSubStatusTy;


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
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }

    /**
     * Get the value of orderStatus
     */ 
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set the value of orderStatus
     *
     * @return  self
     */ 
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get the value of orderDate
     */ 
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set the value of orderDate
     *
     * @return  self
     */ 
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get the value of currencyCode
     */ 
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the value of currencyCode
     *
     * @return  self
     */ 
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the value of warehouseID
     */ 
    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    /**
     * Set the value of warehouseID
     *
     * @return  self
     */ 
    public function setWarehouseID($warehouseID)
    {
        $this->warehouseID = $warehouseID;

        return $this;
    }

    /**
     * Get the value of shipMethodID
     */ 
    public function getShipMethodID()
    {
        return $this->shipMethodID;
    }

    /**
     * Set the value of shipMethodID
     *
     * @return  self
     */ 
    public function setShipMethodID($shipMethodID)
    {
        $this->shipMethodID = $shipMethodID;

        return $this;
    }

    /**
     * Get the value of priceType
     */ 
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Set the value of priceType
     *
     * @return  self
     */ 
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of middleName
     */ 
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set the value of middleName
     *
     * @return  self
     */ 
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of nameSuffix
     */ 
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Set the value of nameSuffix
     *
     * @return  self
     */ 
    public function setNameSuffix($nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * Get the value of company
     */ 
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set the value of company
     *
     * @return  self
     */ 
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of address1
     */ 
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set the value of address1
     *
     * @return  self
     */ 
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get the value of address2
     */ 
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set the value of address2
     *
     * @return  self
     */ 
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get the value of address3
     */ 
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set the value of address3
     *
     * @return  self
     */ 
    public function setAddress3($address3)
    {
        $this->address3 = $address3;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of zip
     */ 
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set the value of zip
     *
     * @return  self
     */ 
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of county
     */ 
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set the value of county
     *
     * @return  self
     */ 
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of other11
     */ 
    public function getOther11()
    {
        return $this->other11;
    }

    /**
     * Set the value of other11
     *
     * @return  self
     */ 
    public function setOther11($other11)
    {
        $this->other11 = $other11;

        return $this;
    }

    /**
     * Get the value of other12
     */ 
    public function getOther12()
    {
        return $this->other12;
    }

    /**
     * Set the value of other12
     *
     * @return  self
     */ 
    public function setOther12($other12)
    {
        $this->other12 = $other12;

        return $this;
    }

    /**
     * Get the value of other13
     */ 
    public function getOther13()
    {
        return $this->other13;
    }

    /**
     * Set the value of other13
     *
     * @return  self
     */ 
    public function setOther13($other13)
    {
        $this->other13 = $other13;

        return $this;
    }

    /**
     * Get the value of other14
     */ 
    public function getOther14()
    {
        return $this->other14;
    }

    /**
     * Set the value of other14
     *
     * @return  self
     */ 
    public function setOther14($other14)
    {
        $this->other14 = $other14;

        return $this;
    }

    /**
     * Get the value of other15
     */ 
    public function getOther15()
    {
        return $this->other15;
    }

    /**
     * Set the value of other15
     *
     * @return  self
     */ 
    public function setOther15($other15)
    {
        $this->other15 = $other15;

        return $this;
    }

    /**
     * Get the value of other16
     */ 
    public function getOther16()
    {
        return $this->other16;
    }

    /**
     * Set the value of other16
     *
     * @return  self
     */ 
    public function setOther16($other16)
    {
        $this->other16 = $other16;

        return $this;
    }

    /**
     * Get the value of other17
     */ 
    public function getOther17()
    {
        return $this->other17;
    }

    /**
     * Set the value of other17
     *
     * @return  self
     */ 
    public function setOther17($other17)
    {
        $this->other17 = $other17;

        return $this;
    }

    /**
     * Get the value of other18
     */ 
    public function getOther18()
    {
        return $this->other18;
    }

    /**
     * Set the value of other18
     *
     * @return  self
     */ 
    public function setOther18($other18)
    {
        $this->other18 = $other18;

        return $this;
    }

    /**
     * Get the value of other19
     */ 
    public function getOther19()
    {
        return $this->other19;
    }

    /**
     * Set the value of other19
     *
     * @return  self
     */ 
    public function setOther19($other19)
    {
        $this->other19 = $other19;

        return $this;
    }

    /**
     * Get the value of other20
     */ 
    public function getOther20()
    {
        return $this->other20;
    }

    /**
     * Set the value of other20
     *
     * @return  self
     */ 
    public function setOther20($other20)
    {
        $this->other20 = $other20;

        return $this;
    }

    /**
     * Get the value of orderType
     */ 
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set the value of orderType
     *
     * @return  self
     */ 
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get the value of taxRateOverride
     */ 
    public function getTaxRateOverride()
    {
        return $this->taxRateOverride;
    }

    /**
     * Set the value of taxRateOverride
     *
     * @return  self
     */ 
    public function setTaxRateOverride($taxRateOverride)
    {
        $this->taxRateOverride = $taxRateOverride;

        return $this;
    }

    /**
     * Get the value of shippingAmountOverride
     */ 
    public function getShippingAmountOverride()
    {
        return $this->shippingAmountOverride;
    }

    /**
     * Set the value of shippingAmountOverride
     *
     * @return  self
     */ 
    public function setShippingAmountOverride($shippingAmountOverride)
    {
        $this->shippingAmountOverride = $shippingAmountOverride;

        return $this;
    }

    /**
     * Get the value of useManualOrderID
     */ 
    public function getUseManualOrderID()
    {
        return $this->useManualOrderID;
    }

    /**
     * Set the value of useManualOrderID
     *
     * @return  self
     */ 
    public function setUseManualOrderID($useManualOrderID)
    {
        $this->useManualOrderID = $useManualOrderID;

        return $this;
    }

    /**
     * Get the value of manualOrderID
     */ 
    public function getManualOrderID()
    {
        return $this->manualOrderID;
    }

    /**
     * Set the value of manualOrderID
     *
     * @return  self
     */ 
    public function setManualOrderID($manualOrderID)
    {
        $this->manualOrderID = $manualOrderID;

        return $this;
    }

    /**
     * Get the value of transferVolumeToID
     */ 
    public function getTransferVolumeToID()
    {
        return $this->transferVolumeToID;
    }

    /**
     * Set the value of transferVolumeToID
     *
     * @return  self
     */ 
    public function setTransferVolumeToID($transferVolumeToID)
    {
        $this->transferVolumeToID = $transferVolumeToID;

        return $this;
    }

    /**
     * Get the value of returnOrderID
     */ 
    public function getReturnOrderID()
    {
        return $this->returnOrderID;
    }

    /**
     * Set the value of returnOrderID
     *
     * @return  self
     */ 
    public function setReturnOrderID($returnOrderID)
    {
        $this->returnOrderID = $returnOrderID;

        return $this;
    }

    /**
     * Get the value of overwriteExistingOrder
     */ 
    public function getOverwriteExistingOrder()
    {
        return $this->overwriteExistingOrder;
    }

    /**
     * Set the value of overwriteExistingOrder
     *
     * @return  self
     */ 
    public function setOverwriteExistingOrder($overwriteExistingOrder)
    {
        $this->overwriteExistingOrder = $overwriteExistingOrder;

        return $this;
    }

    /**
     * Get the value of existingOrderID
     */ 
    public function getExistingOrderID()
    {
        return $this->existingOrderID;
    }

    /**
     * Set the value of existingOrderID
     *
     * @return  self
     */ 
    public function setExistingOrderID($existingOrderID)
    {
        $this->existingOrderID = $existingOrderID;

        return $this;
    }

    /**
     * Get the value of partyID
     */ 
    public function getPartyID()
    {
        return $this->partyID;
    }

    /**
     * Set the value of partyID
     *
     * @return  self
     */ 
    public function setPartyID($partyID)
    {
        $this->partyID = $partyID;

        return $this;
    }

    /**
     * Get the value of details
     */ 
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set the value of details
     *
     * @return  self
     */ 
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get the value of suppressPackSlipPrice
     */ 
    public function getSuppressPackSlipPrice()
    {
        return $this->suppressPackSlipPrice;
    }

    /**
     * Set the value of suppressPackSlipPrice
     *
     * @return  self
     */ 
    public function setSuppressPackSlipPrice($suppressPackSlipPrice)
    {
        $this->suppressPackSlipPrice = $suppressPackSlipPrice;

        return $this;
    }

    /**
     * Get the value of transferVolumeToKey
     */ 
    public function getTransferVolumeToKey()
    {
        return $this->transferVolumeToKey;
    }

    /**
     * Set the value of transferVolumeToKey
     *
     * @return  self
     */ 
    public function setTransferVolumeToKey($transferVolumeToKey)
    {
        $this->transferVolumeToKey = $transferVolumeToKey;

        return $this;
    }

    /**
     * Get the value of returnOrderKey
     */ 
    public function getReturnOrderKey()
    {
        return $this->returnOrderKey;
    }

    /**
     * Set the value of returnOrderKey
     *
     * @return  self
     */ 
    public function setReturnOrderKey($returnOrderKey)
    {
        $this->returnOrderKey = $returnOrderKey;

        return $this;
    }

    /**
     * Get the value of manualOrderKey
     */ 
    public function getManualOrderKey()
    {
        return $this->manualOrderKey;
    }

    /**
     * Set the value of manualOrderKey
     *
     * @return  self
     */ 
    public function setManualOrderKey($manualOrderKey)
    {
        $this->manualOrderKey = $manualOrderKey;

        return $this;
    }

    /**
     * Get the value of existingOrderKey
     */ 
    public function getExistingOrderKey()
    {
        return $this->existingOrderKey;
    }

    /**
     * Set the value of existingOrderKey
     *
     * @return  self
     */ 
    public function setExistingOrderKey($existingOrderKey)
    {
        $this->existingOrderKey = $existingOrderKey;

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
    public function setCustomerKey($customerKey)
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get the value of orderSubStatusTy
     */ 
    public function getOrderSubStatusTy()
    {
        return $this->orderSubStatusTy;
    }

    /**
     * Set the value of orderSubStatusTy
     *
     * @return  self
     */ 
    public function setOrderSubStatusTy($orderSubStatusTy)
    {
        $this->orderSubStatusTy = $orderSubStatusTy;

        return $this;
    }
}
