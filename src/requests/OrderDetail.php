<?php

namespace Thiio\Exigo\Requests;

class OrderDetail extends ExigoRequest
{
    public $itemCode;
    public $quantity;
    public $orderDetailID;
    public $parentOrderDetailID;
    public $parentItemCode;
    public $priceEachOverride;
    public $taxableEachOverride;
    public $shippingPriceEachOverride;
    public $businessVolumeEachOverride;
    public $commissionableVolumeEachOverride;
    public $other1EachOverride;
    public $other2EachOverride;
    public $other3EachOverride;
    public $other4EachOverride;
    public $other5EachOverride;
    public $other6EachOverride;
    public $other7EachOverride;
    public $other8EachOverride;
    public $other9EachOverride;
    public $other10EachOverride;
    public $descriptionOverride;
    public $reference1;
    public $advancedAutoOptions;
    public $orderLine;

    public function __construct()
    {
        
    }


    /**
     * Get the value of itemCode
     */ 
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * Set the value of itemCode
     *
     * @return  self
     */ 
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * Get the value of orderDetailID
     */ 
    public function getOrderDetailID()
    {
        return $this->orderDetailID;
    }

    /**
     * Set the value of orderDetailID
     *
     * @return  self
     */ 
    public function setOrderDetailID($orderDetailID)
    {
        $this->orderDetailID = $orderDetailID;

        return $this;
    }

    /**
     * Get the value of parentOrderDetailID
     */ 
    public function getParentOrderDetailID()
    {
        return $this->parentOrderDetailID;
    }

    /**
     * Set the value of parentOrderDetailID
     *
     * @return  self
     */ 
    public function setParentOrderDetailID($parentOrderDetailID)
    {
        $this->parentOrderDetailID = $parentOrderDetailID;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of parentItemCode
     */ 
    public function getParentItemCode()
    {
        return $this->parentItemCode;
    }

    /**
     * Set the value of parentItemCode
     *
     * @return  self
     */ 
    public function setParentItemCode($parentItemCode)
    {
        $this->parentItemCode = $parentItemCode;

        return $this;
    }

    /**
     * Get the value of priceEachOverride
     */ 
    public function getPriceEachOverride()
    {
        return $this->priceEachOverride;
    }

    /**
     * Set the value of priceEachOverride
     *
     * @return  self
     */ 
    public function setPriceEachOverride($priceEachOverride)
    {
        $this->priceEachOverride = $priceEachOverride;

        return $this;
    }

    /**
     * Get the value of taxableEachOverride
     */ 
    public function getTaxableEachOverride()
    {
        return $this->taxableEachOverride;
    }

    /**
     * Set the value of taxableEachOverride
     *
     * @return  self
     */ 
    public function setTaxableEachOverride($taxableEachOverride)
    {
        $this->taxableEachOverride = $taxableEachOverride;

        return $this;
    }

    /**
     * Get the value of shippingPriceEachOverride
     */ 
    public function getShippingPriceEachOverride()
    {
        return $this->shippingPriceEachOverride;
    }

    /**
     * Set the value of shippingPriceEachOverride
     *
     * @return  self
     */ 
    public function setShippingPriceEachOverride($shippingPriceEachOverride)
    {
        $this->shippingPriceEachOverride = $shippingPriceEachOverride;

        return $this;
    }

    /**
     * Get the value of businessVolumeEachOverride
     */ 
    public function getBusinessVolumeEachOverride()
    {
        return $this->businessVolumeEachOverride;
    }

    /**
     * Set the value of businessVolumeEachOverride
     *
     * @return  self
     */ 
    public function setBusinessVolumeEachOverride($businessVolumeEachOverride)
    {
        $this->businessVolumeEachOverride = $businessVolumeEachOverride;

        return $this;
    }

    /**
     * Get the value of commissionableVolumeEachOverride
     */ 
    public function getCommissionableVolumeEachOverride()
    {
        return $this->commissionableVolumeEachOverride;
    }

    /**
     * Set the value of commissionableVolumeEachOverride
     *
     * @return  self
     */ 
    public function setCommissionableVolumeEachOverride($commissionableVolumeEachOverride)
    {
        $this->commissionableVolumeEachOverride = $commissionableVolumeEachOverride;

        return $this;
    }

    /**
     * Get the value of other1EachOverride
     */ 
    public function getOther1EachOverride()
    {
        return $this->other1EachOverride;
    }

    /**
     * Set the value of other1EachOverride
     *
     * @return  self
     */ 
    public function setOther1EachOverride($other1EachOverride)
    {
        $this->other1EachOverride = $other1EachOverride;

        return $this;
    }

    /**
     * Get the value of other2EachOverride
     */ 
    public function getOther2EachOverride()
    {
        return $this->other2EachOverride;
    }

    /**
     * Set the value of other2EachOverride
     *
     * @return  self
     */ 
    public function setOther2EachOverride($other2EachOverride)
    {
        $this->other2EachOverride = $other2EachOverride;

        return $this;
    }

    /**
     * Get the value of other3EachOverride
     */ 
    public function getOther3EachOverride()
    {
        return $this->other3EachOverride;
    }

    /**
     * Set the value of other3EachOverride
     *
     * @return  self
     */ 
    public function setOther3EachOverride($other3EachOverride)
    {
        $this->other3EachOverride = $other3EachOverride;

        return $this;
    }

    /**
     * Get the value of other4EachOverride
     */ 
    public function getOther4EachOverride()
    {
        return $this->other4EachOverride;
    }

    /**
     * Set the value of other4EachOverride
     *
     * @return  self
     */ 
    public function setOther4EachOverride($other4EachOverride)
    {
        $this->other4EachOverride = $other4EachOverride;

        return $this;
    }

    /**
     * Get the value of other5EachOverride
     */ 
    public function getOther5EachOverride()
    {
        return $this->other5EachOverride;
    }

    /**
     * Set the value of other5EachOverride
     *
     * @return  self
     */ 
    public function setOther5EachOverride($other5EachOverride)
    {
        $this->other5EachOverride = $other5EachOverride;

        return $this;
    }

    /**
     * Get the value of other6EachOverride
     */ 
    public function getOther6EachOverride()
    {
        return $this->other6EachOverride;
    }

    /**
     * Set the value of other6EachOverride
     *
     * @return  self
     */ 
    public function setOther6EachOverride($other6EachOverride)
    {
        $this->other6EachOverride = $other6EachOverride;

        return $this;
    }

    /**
     * Get the value of other7EachOverride
     */ 
    public function getOther7EachOverride()
    {
        return $this->other7EachOverride;
    }

    /**
     * Set the value of other7EachOverride
     *
     * @return  self
     */ 
    public function setOther7EachOverride($other7EachOverride)
    {
        $this->other7EachOverride = $other7EachOverride;

        return $this;
    }

    /**
     * Get the value of other8EachOverride
     */ 
    public function getOther8EachOverride()
    {
        return $this->other8EachOverride;
    }

    /**
     * Set the value of other8EachOverride
     *
     * @return  self
     */ 
    public function setOther8EachOverride($other8EachOverride)
    {
        $this->other8EachOverride = $other8EachOverride;

        return $this;
    }

    /**
     * Get the value of other9EachOverride
     */ 
    public function getOther9EachOverride()
    {
        return $this->other9EachOverride;
    }

    /**
     * Set the value of other9EachOverride
     *
     * @return  self
     */ 
    public function setOther9EachOverride($other9EachOverride)
    {
        $this->other9EachOverride = $other9EachOverride;

        return $this;
    }

    /**
     * Get the value of other10EachOverride
     */ 
    public function getOther10EachOverride()
    {
        return $this->other10EachOverride;
    }

    /**
     * Set the value of other10EachOverride
     *
     * @return  self
     */ 
    public function setOther10EachOverride($other10EachOverride)
    {
        $this->other10EachOverride = $other10EachOverride;

        return $this;
    }

    /**
     * Get the value of descriptionOverride
     */ 
    public function getDescriptionOverride()
    {
        return $this->descriptionOverride;
    }

    /**
     * Set the value of descriptionOverride
     *
     * @return  self
     */ 
    public function setDescriptionOverride($descriptionOverride)
    {
        $this->descriptionOverride = $descriptionOverride;

        return $this;
    }

    /**
     * Get the value of reference1
     */ 
    public function getReference1()
    {
        return $this->reference1;
    }

    /**
     * Set the value of reference1
     *
     * @return  self
     */ 
    public function setReference1($reference1)
    {
        $this->reference1 = $reference1;

        return $this;
    }

    /**
     * Get the value of advancedAutoOptions
     */ 
    public function getAdvancedAutoOptions()
    {
        return $this->advancedAutoOptions;
    }

    /**
     * Set the value of advancedAutoOptions
     *
     * @return  self
     */ 
    public function setAdvancedAutoOptions($advancedAutoOptions)
    {
        $this->advancedAutoOptions = $advancedAutoOptions;

        return $this;
    }

    /**
     * Get the value of orderLine
     */ 
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * Set the value of orderLine
     *
     * @return  self
     */ 
    public function setOrderLine($orderLine)
    {
        $this->orderLine = $orderLine;

        return $this;
    }
}
