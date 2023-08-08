<?php

namespace Thiio\Exigo\Requests\Customers;

use Thiio\Exigo\Requests\ExigoRequest;

class GetCustomers extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/customers";

    public $customerID;
    public $company;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $phone2;
    public $mobilePhone;
    public $fax;
    public $mainAddress1;
    public $mainAddress2;
    public $mainAddress3;
    public $mainCity;
    public $mainState;
    public $mainZip;
    public $mainCountry;
    public $taxID;
    public $customerTypes;
    public $customerStatuses;
    public $enrollerID;
    public $sponsorID;
    public $field1;
    public $field2;
    public $field3;
    public $field4;
    public $field5;
    public $field6;
    public $field7;
    public $field8;
    public $field9;
    public $field10;
    public $field11;
    public $field12;
    public $field13;
    public $field14;
    public $field15;
    public $greaterThanCustomerID;
    public $greaterThanModifiedDate;
    public $batchSize;
    public $loginName;
    public $createdDateEnd;
    public $createdDateStart;
    public $customerKey;
    public $enrollerKey;
    public $sponsorKey;
    public $salesTaxID;



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
    public function setCompany(string $company)
    {
        $this->company = $company;

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
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

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
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

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
    public function setEmail(string $email)
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
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of phone2
     */ 
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set the value of phone2
     *
     * @return  self
     */ 
    public function setPhone2(string $phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get the value of mobilePhone
     */ 
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set the value of mobilePhone
     *
     * @return  self
     */ 
    public function setMobilePhone(string $mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get the value of fax
     */ 
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the value of fax
     *
     * @return  self
     */ 
    public function setFax(string $fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the value of mainAddress1
     */ 
    public function getMainAddress1()
    {
        return $this->mainAddress1;
    }

    /**
     * Set the value of mainAddress1
     *
     * @return  self
     */ 
    public function setMainAddress1(string $mainAddress1)
    {
        $this->mainAddress1 = $mainAddress1;

        return $this;
    }

    /**
     * Get the value of mainAddress2
     */ 
    public function getMainAddress2()
    {
        return $this->mainAddress2;
    }

    /**
     * Set the value of mainAddress2
     *
     * @return  self
     */ 
    public function setMainAddress2(string $mainAddress2)
    {
        $this->mainAddress2 = $mainAddress2;

        return $this;
    }

    /**
     * Get the value of mainAddress3
     */ 
    public function getMainAddress3()
    {
        return $this->mainAddress3;
    }

    /**
     * Set the value of mainAddress3
     *
     * @return  self
     */ 
    public function setMainAddress3(string $mainAddress3)
    {
        $this->mainAddress3 = $mainAddress3;

        return $this;
    }

    /**
     * Get the value of mainCity
     */ 
    public function getMainCity()
    {
        return $this->mainCity;
    }

    /**
     * Set the value of mainCity
     *
     * @return  self
     */ 
    public function setMainCity(string $mainCity)
    {
        $this->mainCity = $mainCity;

        return $this;
    }

    /**
     * Get the value of mainState
     */ 
    public function getMainState()
    {
        return $this->mainState;
    }

    /**
     * Set the value of mainState
     *
     * @return  self
     */ 
    public function setMainState(string $mainState)
    {
        $this->mainState = $mainState;

        return $this;
    }

    /**
     * Get the value of mainZip
     */ 
    public function getMainZip()
    {
        return $this->mainZip;
    }

    /**
     * Set the value of mainZip
     *
     * @return  self
     */ 
    public function setMainZip(string $mainZip)
    {
        $this->mainZip = $mainZip;

        return $this;
    }

    /**
     * Get the value of mainCountry
     */ 
    public function getMainCountry()
    {
        return $this->mainCountry;
    }

    /**
     * Set the value of mainCountry
     *
     * @return  self
     */ 
    public function setMainCountry(string $mainCountry)
    {
        $this->mainCountry = $mainCountry;

        return $this;
    }

    /**
     * Get the value of taxID
     */ 
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * Set the value of taxID
     *
     * @return  self
     */ 
    public function setTaxID(int $taxID)
    {
        $this->taxID = $taxID;

        return $this;
    }

    /**
     * Get the value of customerTypes
     */ 
    public function getCustomerTypes()
    {
        return $this->customerTypes;
    }

    /**
     * Set the value of customerTypes
     *
     * @return  self
     */ 
    public function setCustomerTypes(array $customerTypes)
    {
        $this->customerTypes = $customerTypes;

        return $this;
    }

    /**
     * Get the value of customerStatuses
     */ 
    public function getCustomerStatuses()
    {
        return $this->customerStatuses;
    }

    /**
     * Set the value of customerStatuses
     *
     * @return  self
     */ 
    public function setCustomerStatuses(array $customerStatuses)
    {
        $this->customerStatuses = $customerStatuses;

        return $this;
    }

    /**
     * Get the value of enrollerID
     */ 
    public function getEnrollerID()
    {
        return $this->enrollerID;
    }

    /**
     * Set the value of enrollerID
     *
     * @return  self
     */ 
    public function setEnrollerID(int $enrollerID)
    {
        $this->enrollerID = $enrollerID;

        return $this;
    }

    /**
     * Get the value of sponsorID
     */ 
    public function getSponsorID()
    {
        return $this->sponsorID;
    }

    /**
     * Set the value of sponsorID
     *
     * @return  self
     */ 
    public function setSponsorID(int $sponsorID)
    {
        $this->sponsorID = $sponsorID;

        return $this;
    }

    /**
     * Get the value of field1
     */ 
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Set the value of field1
     *
     * @return  self
     */ 
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Get the value of field2
     */ 
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Set the value of field2
     *
     * @return  self
     */ 
    public function setField2($field2)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * Get the value of field3
     */ 
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Set the value of field3
     *
     * @return  self
     */ 
    public function setField3($field3)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * Get the value of field4
     */ 
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Set the value of field4
     *
     * @return  self
     */ 
    public function setField4($field4)
    {
        $this->field4 = $field4;

        return $this;
    }

    /**
     * Get the value of field5
     */ 
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Set the value of field5
     *
     * @return  self
     */ 
    public function setField5($field5)
    {
        $this->field5 = $field5;

        return $this;
    }

    /**
     * Get the value of field6
     */ 
    public function getField6()
    {
        return $this->field6;
    }

    /**
     * Set the value of field6
     *
     * @return  self
     */ 
    public function setField6($field6)
    {
        $this->field6 = $field6;

        return $this;
    }

    /**
     * Get the value of field7
     */ 
    public function getField7()
    {
        return $this->field7;
    }

    /**
     * Set the value of field7
     *
     * @return  self
     */ 
    public function setField7($field7)
    {
        $this->field7 = $field7;

        return $this;
    }

    /**
     * Get the value of field8
     */ 
    public function getField8()
    {
        return $this->field8;
    }

    /**
     * Set the value of field8
     *
     * @return  self
     */ 
    public function setField8($field8)
    {
        $this->field8 = $field8;

        return $this;
    }

    /**
     * Get the value of field9
     */ 
    public function getField9()
    {
        return $this->field9;
    }

    /**
     * Set the value of field9
     *
     * @return  self
     */ 
    public function setField9($field9)
    {
        $this->field9 = $field9;

        return $this;
    }

    /**
     * Get the value of field10
     */ 
    public function getField10()
    {
        return $this->field10;
    }

    /**
     * Set the value of field10
     *
     * @return  self
     */ 
    public function setField10($field10)
    {
        $this->field10 = $field10;

        return $this;
    }

    /**
     * Get the value of field11
     */ 
    public function getField11()
    {
        return $this->field11;
    }

    /**
     * Set the value of field11
     *
     * @return  self
     */ 
    public function setField11($field11)
    {
        $this->field11 = $field11;

        return $this;
    }

    /**
     * Get the value of field12
     */ 
    public function getField12()
    {
        return $this->field12;
    }

    /**
     * Set the value of field12
     *
     * @return  self
     */ 
    public function setField12($field12)
    {
        $this->field12 = $field12;

        return $this;
    }

    /**
     * Get the value of field13
     */ 
    public function getField13()
    {
        return $this->field13;
    }

    /**
     * Set the value of field13
     *
     * @return  self
     */ 
    public function setField13($field13)
    {
        $this->field13 = $field13;

        return $this;
    }

    /**
     * Get the value of field14
     */ 
    public function getField14()
    {
        return $this->field14;
    }

    /**
     * Set the value of field14
     *
     * @return  self
     */ 
    public function setField14($field14)
    {
        $this->field14 = $field14;

        return $this;
    }

    /**
     * Get the value of field15
     */ 
    public function getField15()
    {
        return $this->field15;
    }

    /**
     * Set the value of field15
     *
     * @return  self
     */ 
    public function setField15($field15)
    {
        $this->field15 = $field15;

        return $this;
    }

    /**
     * Get the value of greaterThanCustomerID
     */ 
    public function getGreaterThanCustomerID()
    {
        return $this->greaterThanCustomerID;
    }

    /**
     * Set the value of greaterThanCustomerID
     *
     * @return  self
     */ 
    public function setGreaterThanCustomerID(int $greaterThanCustomerID)
    {
        $this->greaterThanCustomerID = $greaterThanCustomerID;

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
     * Get the value of loginName
     */ 
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Set the value of loginName
     *
     * @return  self
     */ 
    public function setLoginName(string $loginName)
    {
        $this->loginName = $loginName;

        return $this;
    }

    /**
     * Get the value of createdDateEnd
     */ 
    public function getCreatedDateEnd()
    {
        return $this->createdDateEnd;
    }

    /**
     * Set the value of createdDateEnd
     *
     * @return  self
     */ 
    public function setCreatedDateEnd(string $createdDateEnd)
    {
        $this->createdDateEnd = $createdDateEnd;

        return $this;
    }

    /**
     * Get the value of createdDateStart
     */ 
    public function getCreatedDateStart()
    {
        return $this->createdDateStart;
    }

    /**
     * Set the value of createdDateStart
     *
     * @return  self
     */ 
    public function setCreatedDateStart(string $createdDateStart)
    {
        $this->createdDateStart = $createdDateStart;

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
     * Get the value of enrollerKey
     */ 
    public function getEnrollerKey()
    {
        return $this->enrollerKey;
    }

    /**
     * Set the value of enrollerKey
     *
     * @return  self
     */ 
    public function setEnrollerKey(string $enrollerKey)
    {
        $this->enrollerKey = $enrollerKey;

        return $this;
    }

    /**
     * Get the value of sponsorKey
     */ 
    public function getSponsorKey()
    {
        return $this->sponsorKey;
    }

    /**
     * Set the value of sponsorKey
     *
     * @return  self
     */ 
    public function setSponsorKey(string $sponsorKey)
    {
        $this->sponsorKey = $sponsorKey;

        return $this;
    }

    /**
     * Get the value of salesTaxID
     */ 
    public function getSalesTaxID()
    {
        return $this->salesTaxID;
    }

    /**
     * Set the value of salesTaxID
     *
     * @return  self
     */ 
    public function setSalesTaxID(string $salesTaxID)
    {
        $this->salesTaxID = $salesTaxID;

        return $this;
    }
}
