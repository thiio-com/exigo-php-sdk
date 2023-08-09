<?php

namespace Thiio\Exigo\Requests\TreeMovement;

use Thiio\Exigo\Requests\ExigoRequest;

class PlaceEnrollerNode extends ExigoRequest
{
    const ENDPOINT = self::API_VERSION."/tree/enroller";

    public $customerID;
    public $toEnrollerID;
    public $reason;
    public $customerKey;
    public $toEnrollerKey;


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
     * Get the value of toEnrollerID
     */ 
    public function getToEnrollerID()
    {
        return $this->toEnrollerID;
    }

    /**
     * Set the value of toEnrollerID
     *
     * @return  self
     */ 
    public function setToEnrollerID(int $toEnrollerID)
    {
        $this->toEnrollerID = $toEnrollerID;

        return $this;
    }

    /**
     * Get the value of reason
     */ 
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set the value of reason
     *
     * @return  self
     */ 
    public function setReason(string $reason)
    {
        $this->reason = $reason;

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
     * Get the value of toEnrollerKey
     */ 
    public function getToEnrollerKey()
    {
        return $this->toEnrollerKey;
    }

    /**
     * Set the value of toEnrollerKey
     *
     * @return  self
     */ 
    public function setToEnrollerKey(string $toEnrollerKey)
    {
        $this->toEnrollerKey = $toEnrollerKey;

        return $this;
    }
}
