<?php

namespace Thiio\Exigo\Requests\Items;

use Thiio\Exigo\Requests\ExigoRequest;

class GetItems extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/item";

    public $currencyCode;
    public $priceType;
    public $warehouseID;
    public $itemCodes;
    public $webID;
    public $webCategoryID;
    public $returnLongDetail;
    public $restrictToWarehouse;
    public $languageID;
    public $excludeHideFromSearch;


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
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;

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
    public function setPriceType(int $priceType)
    {
        $this->priceType = $priceType;

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
     * Get the value of itemCodes
     */ 
    public function getItemCodes()
    {
        return $this->itemCodes;
    }

    /**
     * Set the value of itemCodes
     *
     * @return  self
     */ 
    public function setItemCodes(array $itemCodes)
    {
        $this->itemCodes = $itemCodes;

        return $this;
    }

    /**
     * Get the value of webID
     */ 
    public function getWebID()
    {
        return $this->webID;
    }

    /**
     * Set the value of webID
     *
     * @return  self
     */ 
    public function setWebID(int $webID)
    {
        $this->webID = $webID;

        return $this;
    }

    /**
     * Get the value of webCategoryID
     */ 
    public function getWebCategoryID()
    {
        return $this->webCategoryID;
    }

    /**
     * Set the value of webCategoryID
     *
     * @return  self
     */ 
    public function setWebCategoryID(int $webCategoryID)
    {
        $this->webCategoryID = $webCategoryID;

        return $this;
    }

    /**
     * Get the value of returnLongDetail
     */ 
    public function getReturnLongDetail()
    {
        return $this->returnLongDetail;
    }

    /**
     * Set the value of returnLongDetail
     *
     * @return  self
     */ 
    public function setReturnLongDetail(bool $returnLongDetail)
    {
        $this->returnLongDetail = $returnLongDetail;

        return $this;
    }

    /**
     * Get the value of restrictToWarehouse
     */ 
    public function getRestrictToWarehouse()
    {
        return $this->restrictToWarehouse;
    }

    /**
     * Set the value of restrictToWarehouse
     *
     * @return  self
     */ 
    public function setRestrictToWarehouse(bool $restrictToWarehouse)
    {
        $this->restrictToWarehouse = $restrictToWarehouse;

        return $this;
    }

    /**
     * Get the value of languageID
     */ 
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Set the value of languageID
     *
     * @return  self
     */ 
    public function setLanguageID(int $languageID)
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * Get the value of excludeHideFromSearch
     */ 
    public function getExcludeHideFromSearch()
    {
        return $this->excludeHideFromSearch;
    }

    /**
     * Set the value of excludeHideFromSearch
     *
     * @return  self
     */ 
    public function setExcludeHideFromSearch(bool $excludeHideFromSearch)
    {
        $this->excludeHideFromSearch = $excludeHideFromSearch;

        return $this;
    }
}
