<?php

namespace Thiio\Exigo\Requests\OrdersPayments;

use DateTime;
use Thiio\Exigo\Requests\ExigoRequest;

class GetOrders extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/orders";

    public $customerID;
    public $orderID;
    public $orderIDs;
    public $orderDateStart;
    public $orderDateEnd;
    public $orderStatus;
    public $otherOrderStatuses;
    public $warehouseID;
    public $currencyCode;
    public $returnCustomer;
    public $returnKitDetails;
    public $greaterThanOrderID;
    public $greaterThanModifiedDate;
    public $batchSize;
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
    public $partyID;
    public $customerKey;
    public $orderKey;
    public $orderKeys;
    public $orderSubStatusTy;
    public $batchID;
    public $orderTys;

    public function  __construct()
    {
        
    }


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
    public function setOrderID(int $orderID)
    {
        $this->orderID = $orderID;

        return $this;
    }

    /**
     * Get the value of orderIDs
     */ 
    public function getOrderIDs()
    {
        return $this->orderIDs;
    }

    /**
     * Set the value of orderIDs
     *
     * @return  self
     */ 
    public function setOrderIDs(array $orderIDs)
    {
        $this->orderIDs = $orderIDs;

        return $this;
    }

    /**
     * Get the value of orderDateStart
     */ 
    public function getOrderDateStart()
    {
        return $this->orderDateStart;
    }

    /**
     * Set the value of orderDateStart
     *
     * @return  self
     */ 
    public function setOrderDateStart( string $orderDateStart)
    {
        $this->orderDateStart = $orderDateStart;

        return $this;
    }

    /**
     * Get the value of orderDateEnd
     */ 
    public function getOrderDateEnd()
    {
        return $this->orderDateEnd;
    }

    /**
     * Set the value of orderDateEnd
     *
     * @return  self
     */ 
    public function setOrderDateEnd( string $orderDateEnd)
    {
        $this->orderDateEnd = $orderDateEnd;

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
    public function setOrderStatus(string $orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get the value of otherOrderStatuses
     */ 
    public function getOtherOrderStatuses()
    {
        return $this->otherOrderStatuses;
    }

    /**
     * Set the value of otherOrderStatuses
     *
     * @return  self
     */ 
    public function setOtherOrderStatuses(array $otherOrderStatuses)
    {
        $this->otherOrderStatuses = $otherOrderStatuses;

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
    public function setWarehouseID(int $warehouseID)
    {
        $this->warehouseID = $warehouseID;

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
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the value of returnCustomer
     */ 
    public function getReturnCustomer()
    {
        return $this->returnCustomer;
    }

    /**
     * Set the value of returnCustomer
     *
     * @return  self
     */ 
    public function setReturnCustomer(bool $returnCustomer)
    {
        $this->returnCustomer = $returnCustomer;

        return $this;
    }

    /**
     * Get the value of returnKitDetails
     */ 
    public function getReturnKitDetails()
    {
        return $this->returnKitDetails;
    }

    /**
     * Set the value of returnKitDetails
     *
     * @return  self
     */ 
    public function setReturnKitDetails(bool $returnKitDetails)
    {
        $this->returnKitDetails = $returnKitDetails;

        return $this;
    }

    /**
     * Get the value of greaterThanOrderID
     */ 
    public function getGreaterThanOrderID()
    {
        return $this->greaterThanOrderID;
    }

    /**
     * Set the value of greaterThanOrderID
     *
     * @return  self
     */ 
    public function setGreaterThanOrderID(int $greaterThanOrderID)
    {
        $this->greaterThanOrderID = $greaterThanOrderID;

        return $this;
    }

    /**
     * Get the value of greaterThanModifiedDate
     */ 
    public function getGreaterThanModifiedDate()
    {
        return $this->greaterThanModifiedDate;
    }

    /**
     * Set the value of greaterThanModifiedDate
     *
     * @return  self
     */ 
    public function setGreaterThanModifiedDate(string $greaterThanModifiedDate)
    {
        $this->greaterThanModifiedDate = $greaterThanModifiedDate;

        return $this;
    }

    /**
     * Get the value of batchSize
     */ 
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * Set the value of batchSize
     *
     * @return  self
     */ 
    public function setBatchSize(int $batchSize)
    {
        $this->batchSize = $batchSize;

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
    public function setOther11(string $other11)
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
    public function setOther12(string $other12)
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
    public function setOther13(string $other13)
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
    public function setOther14(string $other14)
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
    public function setOther15(string $other15)
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
    public function setOther16(string $other16)
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
    public function setOther17(string $other17)
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
    public function setOther18(string $other18)
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
    public function setOther19(string $other19)
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
    public function setOther20(string $other20)
    {
        $this->other20 = $other20;

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
    public function setPartyID(int $partyID)
    {
        $this->partyID = $partyID;

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
    public function setOrderKey(string $orderKey)
    {
        $this->orderKey = $orderKey;

        return $this;
    }

    /**
     * Get the value of orderKeys
     */ 
    public function getOrderKeys()
    {
        return $this->orderKeys;
    }

    /**
     * Set the value of orderKeys
     *
     * @return  self
     */ 
    public function setOrderKeys(array $orderKeys)
    {
        $this->orderKeys = $orderKeys;

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
    public function setOrderSubStatusTy(int $orderSubStatusTy)
    {
        $this->orderSubStatusTy = $orderSubStatusTy;

        return $this;
    }

    /**
     * Get the value of batchID
     */ 
    public function getBatchID()
    {
        return $this->batchID;
    }

    /**
     * Set the value of batchID
     *
     * @return  self
     */ 
    public function setBatchID(int $batchID)
    {
        $this->batchID = $batchID;

        return $this;
    }

    /**
     * Get the value of orderTys
     */ 
    public function getOrderTys()
    {
        return $this->orderTys;
    }

    /**
     * Set the value of orderTys
     *
     * @return  self
     */ 
    public function setOrderTys(array $orderTys)
    {
        $this->orderTys = $orderTys;

        return $this;
    }
}
