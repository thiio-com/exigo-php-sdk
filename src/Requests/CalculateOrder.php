<?php

namespace Thiio\Exigo\Requests;

class CalculateOrder extends ExigoRequest {

    const ENDPOINT = self::API_VERSION."/orders/calculate";

    protected $currencyCode;
    protected $warehouseID;
    protected $shipMethodID;
    protected $priceType;
    protected $address1;
    protected $address2;
    protected $address3;
    protected $city;
    protected $state;
    protected $zip;
    protected $country;
    protected $county;
    protected $customerID;
    protected $taxRateOverride;
    protected $shippingAmountOverride;
    protected $returnOrderID;
    protected $other11;
    protected $other12;
    protected $other13;
    protected $other14;
    protected $other15;
    protected $other16;
    protected $other17;
    protected $other18;
    protected $other19;
    protected $other20;
    protected $details;
    protected $returnShipMethods;
    protected $partyID;
    protected $returnTrace;
    protected $customerKey;
    protected $returnOrder;
    protected $orderID;
    protected $orderType;
    protected $orderSubStatusTy;


    public function __construct()
    {
        
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
    public function setCurrencyCode( string $currencyCode )
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
    public function setWarehouseID( int $warehouseID )
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
    public function setShipMethodID( int $shipMethodID )
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
    public function setPriceType( int $priceType )
    {
        $this->priceType = $priceType;

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
    public function setAddress1( string $address1 )
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
    public function setAddress2( string $address2 )
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
    public function setAddress3( string $address3 )
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
    public function setCity( string $city )
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
    public function setState( string $state )
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
    public function setZip( string $zip )
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
    public function setCountry( string $country )
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
    public function setCounty( string $county )
    {
        $this->county = $county;

        return $this;
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
    public function setCustomerID( int $customerID )
    {
        $this->customerID = $customerID;

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
    public function setTaxRateOverride( float $taxRateOverride )
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
    public function setShippingAmountOverride( float $shippingAmountOverride)
    {
        $this->shippingAmountOverride = $shippingAmountOverride;

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
    public function setReturnOrderID( int $returnOrderID )
    {
        $this->returnOrderID = $returnOrderID;

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
    public function setOther11( string $other11 )
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
    public function setOther12( string $other12 )
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
    public function setOther13( string $other13 )
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
    public function setOther15( string $other15 )
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
    public function setOther16( string $other16 )
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
    public function setOther17( string $other17 )
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
    public function setOther18( string $other18 )
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
    public function setOther19( string $other19 )
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
    public function setOther20( string $other20 )
    {
        $this->other20 = $other20;

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
    public function setDetails( array $details )
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get the value of returnShipMethods
     */ 
    public function getReturnShipMethods()
    {
        return $this->returnShipMethods;
    }

    /**
     * Set the value of returnShipMethods
     *
     * @return  self
     */ 
    public function setReturnShipMethods( bool $returnShipMethods )
    {
        $this->returnShipMethods = $returnShipMethods;

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
    public function setPartyID( int $partyID )
    {
        $this->partyID = $partyID;

        return $this;
    }

    /**
     * Get the value of returnTrace
     */ 
    public function getReturnTrace()
    {
        return $this->returnTrace;
    }

    /**
     * Set the value of returnTrace
     *
     * @return  self
     */ 
    public function setReturnTrace( string $returnTrace )
    {
        $this->returnTrace = $returnTrace;

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
    public function setCustomerKey( string $customerKey )
    {
        $this->customerKey = $customerKey;

        return $this;
    }

    /**
     * Get the value of returnOrder
     */ 
    public function getReturnOrder()
    {
        return $this->returnOrder;
    }

    /**
     * Set the value of returnOrder
     *
     * @return  self
     */ 
    public function setReturnOrder( string $returnOrder )
    {
        $this->returnOrder = $returnOrder;

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
    public function setOrderID( int $orderID )
    {
        $this->orderID = $orderID;

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
    public function setOrderType( string $orderType )
    {
        $this->orderType = $orderType;

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
    public function setOrderSubStatusTy( int $orderSubStatusTy )
    {
        $this->orderSubStatusTy = $orderSubStatusTy;

        return $this;
    }
}
