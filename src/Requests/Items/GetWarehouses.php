<?php


namespace Thiio\Exigo\Requests\Items;

use Thiio\Exigo\Requests\ExigoRequest;

class GetWarehouses extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/warehouse";


    public $warehouseID;
    public $description;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zip;
    public $country;


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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

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
    public function setAddress1(string $address1)
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
    public function setAddress2(string $address2)
    {
        $this->address2 = $address2;

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
    public function setCity(string $city)
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
    public function setState(string $state)
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
    public function setZip(string $zip)
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
    public function setCountry(string $country)
    {
        $this->country = $country;

        return $this;
    }
}
