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

    public function setCustomerID(int $customerId)
    {
        $this->customerID = $customerId;
    }

    public function setOrderStatus(string $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function setOrderDate(string $orderDate)
    {
        $this->orderDate = $orderDate;
    }

    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    public function setWarehouseID(int $warehouseId)
    {
        $this->warehouseID = $warehouseId;
    }

    public function setShipMethodID(int $shipMethodId)
    {
        $this->shipMethodID = $shipMethodId;
    }

    public function setPriceType(int $priceType)
    {
        $this->priceType = $priceType;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function setMiddleName(string $middleName)
    {
        $this->middleName = $middleName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function setNameSuffix(string $nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;
    }

    public function setCompany(string $company)
    {
        $this->company = $company;
    }

    public function setAddress1(string $address1)
    {
        $this->address1 = $address1;
    }

    public function setAddress2(string $address2)
    {
        $this->address2 = $address2;
    }

    public function setAddress3(string $address3)
    {
        $this->address3 = $address3;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    public function setCounty(string $county)
    {
        $this->county = $county;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function setNotes(string $notes)
    {
        $this->notes = $notes;
    }

    public function setOther11(string $other11)
    {
        $this->other11 = $other11;
    }

    public function setOther12(string $other12)
    {
        $this->other12 = $other12;
    }

    public function setOther13(string $other13)
    {
        $this->other13 = $other13;
    }

    public function setOther14(string $other14)
    {
        $this->other14 = $other14;
    }

    public function setOther15(string $other15)
    {
        $this->other15 = $other15;
    }

    public function setOther16(string $other16)
    {
        $this->other16 = $other16;
    }

    public function setOther17(string $other17)
    {
        $this->other17 = $other17;
    }

    public function setOther18(string $other18)
    {
        $this->other18 = $other18;
    }

    public function setOther19(string $other19)
    {
        $this->other19 = $other19;
    }

    public function setOther20(string $other20)
    {
        $this->other20 = $other20;
    }

    public function setOrderType(string $orderType)
    {
        $this->orderType = $orderType;
    }

    public function setTaxRateOverride(float $taxRateOverride)
    {
        $this->taxRateOverride = $taxRateOverride;
    }

    public function setShippingAmountOverride(float $shippingAmountOverride)
    {
        $this->shippingAmountOverride = $shippingAmountOverride;
    }

    public function setUseManualOrderID(?bool $useManualOrderId)
    {
        $this->useManualOrderID = $useManualOrderId;
    }

    public function setManualOrderID(int $manualOrderId)
    {
        $this->manualOrderID = $manualOrderId;
    }

    public function setTransferVolumeToID(int $transferVolumeToId)
    {
        $this->transferVolumeToID = $transferVolumeToId;
    }

    public function setReturnOrderID(int $returnOrderId)
    {
        $this->returnOrderID = $returnOrderId;
    }

    public function setOverwriteExistingOrder(bool $overwriteExistingOrder)
    {
        $this->overwriteExistingOrder = $overwriteExistingOrder;
    }

    public function setExistingOrderID(int $existingOrderId)
    {
        $this->existingOrderID = $existingOrderId;
    }

    public function setPartyID(int $partyId)
    {
        $this->partyID = $partyId;
    }

    public function setDetails(array $details)
    {
        $this->details = $details;
    }

    public function setSuppressPackSlipPrice(bool $suppressPackSlipPrice)
    {
        $this->suppressPackSlipPrice = $suppressPackSlipPrice;

    }

    public function setTransferVolumeToKey(string $transferVolumeToKey)
    {
        $this->transferVolumeToKey = $transferVolumeToKey;
    }

    public function setReturnOrderKey(string $returnOrderKey)
    {
        $this->returnOrderKey = $returnOrderKey;
    }

    public function setManualOrderKey(string $manualOrderKey)
    {
        $this->manualOrderKey = $manualOrderKey;
    }

    public function setExistingOrderKey(string $existingOrderKey)
    {
        $this->existingOrderKey = $existingOrderKey;
    }

    public function setCustomerKey(string $customerKey)
    {
        $this->customerKey = $customerKey;
    }

    public function setOrderSubStatusTy(int $orderSubStatusTy)
    {
        $this->orderSubStatusTy = $orderSubStatusTy;
    }
    

    /**
     * Get the value of customerID
     */ 
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Get the value of orderStatus
     */ 
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Get the value of orderDate
     */ 
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Get the value of currencyCode
     */ 
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Get the value of warehouseID
     */ 
    public function getWarehouseID()
    {
        return $this->warehouseID;
    }

    /**
     * Get the value of shipMethodID
     */ 
    public function getShipMethodID()
    {
        return $this->shipMethodID;
    }

    /**
     * Get the value of priceType
     */ 
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Get the value of middleName
     */ 
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get the value of nameSuffix
     */ 
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Get the value of company
     */ 
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Get the value of address1
     */ 
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Get the value of address2
     */ 
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Get the value of address3
     */ 
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get the value of zip
     */ 
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get the value of county
     */ 
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Get the value of other11
     */ 
    public function getOther11()
    {
        return $this->other11;
    }

    /**
     * Get the value of other12
     */ 
    public function getOther12()
    {
        return $this->other12;
    }

    /**
     * Get the value of other13
     */ 
    public function getOther13()
    {
        return $this->other13;
    }

    /**
     * Get the value of other14
     */ 
    public function getOther14()
    {
        return $this->other14;
    }

    /**
     * Get the value of other15
     */ 
    public function getOther15()
    {
        return $this->other15;
    }

    /**
     * Get the value of other16
     */ 
    public function getOther16()
    {
        return $this->other16;
    }

    /**
     * Get the value of other17
     */ 
    public function getOther17()
    {
        return $this->other17;
    }

    /**
     * Get the value of other18
     */ 
    public function getOther18()
    {
        return $this->other18;
    }

    /**
     * Get the value of other19
     */ 
    public function getOther19()
    {
        return $this->other19;
    }

    /**
     * Get the value of other20
     */ 
    public function getOther20()
    {
        return $this->other20;
    }

    /**
     * Get the value of orderType
     */ 
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Get the value of taxRateOverride
     */ 
    public function getTaxRateOverride()
    {
        return $this->taxRateOverride;
    }

    /**
     * Get the value of shippingAmountOverride
     */ 
    public function getShippingAmountOverride()
    {
        return $this->shippingAmountOverride;
    }

    /**
     * Get the value of useManualOrderID
     */ 
    public function getUseManualOrderID()
    {
        return $this->useManualOrderID;
    }

    /**
     * Get the value of manualOrderID
     */ 
    public function getManualOrderID()
    {
        return $this->manualOrderID;
    }

    /**
     * Get the value of transferVolumeToID
     */ 
    public function getTransferVolumeToID()
    {
        return $this->transferVolumeToID;
    }

    /**
     * Get the value of returnOrderID
     */ 
    public function getReturnOrderID()
    {
        return $this->returnOrderID;
    }

    /**
     * Get the value of overwriteExistingOrder
     */ 
    public function getOverwriteExistingOrder()
    {
        return $this->overwriteExistingOrder;
    }

    /**
     * Get the value of existingOrderID
     */ 
    public function getExistingOrderID()
    {
        return $this->existingOrderID;
    }

    /**
     * Get the value of partyID
     */ 
    public function getPartyID()
    {
        return $this->partyID;
    }

    /**
     * Get the value of details
     */ 
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Get the value of suppressPackSlipPrice
     */ 
    public function getSuppressPackSlipPrice()
    {
        return $this->suppressPackSlipPrice;
    }

    /**
     * Get the value of transferVolumeToKey
     */ 
    public function getTransferVolumeToKey()
    {
        return $this->transferVolumeToKey;
    }

    /**
     * Get the value of returnOrderKey
     */ 
    public function getReturnOrderKey()
    {
        return $this->returnOrderKey;
    }

    /**
     * Get the value of manualOrderKey
     */ 
    public function getManualOrderKey()
    {
        return $this->manualOrderKey;
    }

    /**
     * Get the value of existingOrderKey
     */ 
    public function getExistingOrderKey()
    {
        return $this->existingOrderKey;
    }

    /**
     * Get the value of customerKey
     */ 
    public function getCustomerKey()
    {
        return $this->customerKey;
    }

    /**
     * Get the value of orderSubStatusTy
     */ 
    public function getOrderSubStatusTy()
    {
        return $this->orderSubStatusTy;
    }
}
