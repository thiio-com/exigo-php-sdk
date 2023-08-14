<?php

namespace Thiio\Exigo\Requests\Customers;

use Thiio\Exigo\Requests\ExigoRequest;

class GetCustomerSite extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/customers/site";

    public $webAlias;
    public $customerID;
    public $customerKey;


    /**
     * Get the value of webAlias
     */ 
    public function getWebAlias()
    {
        return $this->webAlias;
    }

    /**
     * Set the value of webAlias
     *
     * @return  self
     */ 
    public function setWebAlias(string $webAlias)
    {
        $this->webAlias = $webAlias;

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
    public function setCustomerID(int $customerID)
    {
        $this->customerID = $customerID;

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
}
