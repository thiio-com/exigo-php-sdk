<?php
namespace Thiio\Exigo\Requests\Communications;

use Thiio\Exigo\Requests\ExigoRequest;

class OptInSms extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/sms/optin";

    public $customerID;
    public $phoneNumber;
    public $customerKey;


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
     * Set the value of phoneNumber
     *
     * @return  self
     */ 
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
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
     * Get the value of customerID
     */ 
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Get the value of phoneNumber
     */ 
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Get the value of customerKey
     */ 
    public function getCustomerKey()
    {
        return $this->customerKey;
    }
}
