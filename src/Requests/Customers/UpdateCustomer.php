<?php

namespace Thiio\Exigo\Requests\Customers;

use Thiio\Exigo\Requests\ExigoRequest;

class UpdateCustomer extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/customers";

    public $customerID;
    public $firstName;
    public $lastName;
    public $company;
    public $customerType;
    public $customerStatus;
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
    public $mainCounty;
    public $mailAddress1;
    public $mailAddress2;
    public $mailAddress3;
    public $mailCity;
    public $mailState;
    public $mailZip;
    public $mailCountry;
    public $mailCounty;
    public $otherAddress1;
    public $otherAddress2;
    public $otherAddress3;
    public $otherCity;
    public $otherState;
    public $otherZip;
    public $otherCountry;
    public $otherCounty;
    public $canLogin;
    public $loginName;
    public $loginPassword;
    public $insertEnrollerTree;
    public $enrollerID;
    public $insertUnilevelTree;
    public $sponsorID;
    public $useManualCustomerID;
    public $manualCustomerID;
    public $taxID;
    public $salesTaxID;
    public $salesTaxExemptExpireDate;
    public $isSalesTaxExempt;
    public $birthDate;
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
    public $subscribeToBroadcasts;
    public $subscribeFromIPAddress;
    public $currencyCode;
    public $payableToName;
    public $createdDate;
    public $languageID;
    public $gender;
    public $vatRegistration;
    public $date1;
    public $date2;
    public $date3;
    public $date4;
    public $date5;
    public $middleName;
    public $nameSuffix;
    public $binaryPlacementPreference;
    public $useBinaryHoldingTank;
    public $mainAddressVerified;
    public $mailAddressVerified;
    public $otherAddressVerified;
    public $customerKey;
    public $payableTy;
    public $taxIDTy;
    public $defaultWarehouseID;
    public $checkThreshold;


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
     * Get the value of customerType
     */ 
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Set the value of customerType
     *
     * @return  self
     */ 
    public function setCustomerType(int $customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Get the value of customerStatus
     */ 
    public function getCustomerStatus()
    {
        return $this->customerStatus;
    }

    /**
     * Set the value of customerStatus
     *
     * @return  self
     */ 
    public function setCustomerStatus(int $customerStatus)
    {
        $this->customerStatus = $customerStatus;

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
     * Get the value of mainCounty
     */ 
    public function getMainCounty()
    {
        return $this->mainCounty;
    }

    /**
     * Set the value of mainCounty
     *
     * @return  self
     */ 
    public function setMainCounty(string $mainCounty)
    {
        $this->mainCounty = $mainCounty;

        return $this;
    }

    /**
     * Get the value of mailAddress1
     */ 
    public function getMailAddress1()
    {
        return $this->mailAddress1;
    }

    /**
     * Set the value of mailAddress1
     *
     * @return  self
     */ 
    public function setMailAddress1(string $mailAddress1)
    {
        $this->mailAddress1 = $mailAddress1;

        return $this;
    }

    /**
     * Get the value of mailAddress2
     */ 
    public function getMailAddress2()
    {
        return $this->mailAddress2;
    }

    /**
     * Set the value of mailAddress2
     *
     * @return  self
     */ 
    public function setMailAddress2(string $mailAddress2)
    {
        $this->mailAddress2 = $mailAddress2;

        return $this;
    }

    /**
     * Get the value of mailAddress3
     */ 
    public function getMailAddress3()
    {
        return $this->mailAddress3;
    }

    /**
     * Set the value of mailAddress3
     *
     * @return  self
     */ 
    public function setMailAddress3(string $mailAddress3)
    {
        $this->mailAddress3 = $mailAddress3;

        return $this;
    }

    /**
     * Get the value of mailCity
     */ 
    public function getMailCity()
    {
        return $this->mailCity;
    }

    /**
     * Set the value of mailCity
     *
     * @return  self
     */ 
    public function setMailCity(string $mailCity)
    {
        $this->mailCity = $mailCity;

        return $this;
    }

    /**
     * Get the value of mailState
     */ 
    public function getMailState()
    {
        return $this->mailState;
    }

    /**
     * Set the value of mailState
     *
     * @return  self
     */ 
    public function setMailState(string $mailState)
    {
        $this->mailState = $mailState;

        return $this;
    }

    /**
     * Get the value of mailZip
     */ 
    public function getMailZip()
    {
        return $this->mailZip;
    }

    /**
     * Set the value of mailZip
     *
     * @return  self
     */ 
    public function setMailZip(string $mailZip)
    {
        $this->mailZip = $mailZip;

        return $this;
    }

    /**
     * Get the value of mailCountry
     */ 
    public function getMailCountry()
    {
        return $this->mailCountry;
    }

    /**
     * Set the value of mailCountry
     *
     * @return  self
     */ 
    public function setMailCountry(string $mailCountry)
    {
        $this->mailCountry = $mailCountry;

        return $this;
    }

    /**
     * Get the value of mailCounty
     */ 
    public function getMailCounty()
    {
        return $this->mailCounty;
    }

    /**
     * Set the value of mailCounty
     *
     * @return  self
     */ 
    public function setMailCounty(string $mailCounty)
    {
        $this->mailCounty = $mailCounty;

        return $this;
    }

    /**
     * Get the value of otherAddress1
     */ 
    public function getOtherAddress1()
    {
        return $this->otherAddress1;
    }

    /**
     * Set the value of otherAddress1
     *
     * @return  self
     */ 
    public function setOtherAddress1(string $otherAddress1)
    {
        $this->otherAddress1 = $otherAddress1;

        return $this;
    }

    /**
     * Get the value of otherAddress2
     */ 
    public function getOtherAddress2()
    {
        return $this->otherAddress2;
    }

    /**
     * Set the value of otherAddress2
     *
     * @return  self
     */ 
    public function setOtherAddress2(string $otherAddress2)
    {
        $this->otherAddress2 = $otherAddress2;

        return $this;
    }

    /**
     * Get the value of otherAddress3
     */ 
    public function getOtherAddress3()
    {
        return $this->otherAddress3;
    }

    /**
     * Set the value of otherAddress3
     *
     * @return  self
     */ 
    public function setOtherAddress3(string $otherAddress3)
    {
        $this->otherAddress3 = $otherAddress3;

        return $this;
    }

    /**
     * Get the value of otherCity
     */ 
    public function getOtherCity()
    {
        return $this->otherCity;
    }

    /**
     * Set the value of otherCity
     *
     * @return  self
     */ 
    public function setOtherCity(string $otherCity)
    {
        $this->otherCity = $otherCity;

        return $this;
    }

    /**
     * Get the value of otherState
     */ 
    public function getOtherState()
    {
        return $this->otherState;
    }

    /**
     * Set the value of otherState
     *
     * @return  self
     */ 
    public function setOtherState(string $otherState)
    {
        $this->otherState = $otherState;

        return $this;
    }

    /**
     * Get the value of otherZip
     */ 
    public function getOtherZip()
    {
        return $this->otherZip;
    }

    /**
     * Set the value of otherZip
     *
     * @return  self
     */ 
    public function setOtherZip(string $otherZip)
    {
        $this->otherZip = $otherZip;

        return $this;
    }

    /**
     * Get the value of otherCountry
     */ 
    public function getOtherCountry()
    {
        return $this->otherCountry;
    }

    /**
     * Set the value of otherCountry
     *
     * @return  self
     */ 
    public function setOtherCountry(string $otherCountry)
    {
        $this->otherCountry = $otherCountry;

        return $this;
    }

    /**
     * Get the value of otherCounty
     */ 
    public function getOtherCounty()
    {
        return $this->otherCounty;
    }

    /**
     * Set the value of otherCounty
     *
     * @return  self
     */ 
    public function setOtherCounty(string $otherCounty)
    {
        $this->otherCounty = $otherCounty;

        return $this;
    }

    /**
     * Get the value of canLogin
     */ 
    public function getCanLogin()
    {
        return $this->canLogin;
    }

    /**
     * Set the value of canLogin
     *
     * @return  self
     */ 
    public function setCanLogin(bool $canLogin)
    {
        $this->canLogin = $canLogin;

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
     * Get the value of loginPassword
     */ 
    public function getLoginPassword()
    {
        return $this->loginPassword;
    }

    /**
     * Set the value of loginPassword
     *
     * @return  self
     */ 
    public function setLoginPassword(string $loginPassword)
    {
        $this->loginPassword = $loginPassword;

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
    public function setTaxID(string $taxID)
    {
        $this->taxID = $taxID;

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

    /**
     * Get the value of salesTaxExemptExpireDate
     */ 
    public function getSalesTaxExemptExpireDate()
    {
        return $this->salesTaxExemptExpireDate;
    }

    /**
     * Set the value of salesTaxExemptExpireDate
     *
     * @return  self
     */ 
    public function setSalesTaxExemptExpireDate(string $salesTaxExemptExpireDate)
    {
        $this->salesTaxExemptExpireDate = $salesTaxExemptExpireDate;

        return $this;
    }

    /**
     * Get the value of isSalesTaxExempt
     */ 
    public function getIsSalesTaxExempt()
    {
        return $this->isSalesTaxExempt;
    }

    /**
     * Set the value of isSalesTaxExempt
     *
     * @return  self
     */ 
    public function setIsSalesTaxExempt(bool $isSalesTaxExempt)
    {
        $this->isSalesTaxExempt = $isSalesTaxExempt;

        return $this;
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate(string $birthDate)
    {
        $this->birthDate = $birthDate;

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
     * Get the value of subscribeToBroadcasts
     */ 
    public function getSubscribeToBroadcasts()
    {
        return $this->subscribeToBroadcasts;
    }

    /**
     * Set the value of subscribeToBroadcasts
     *
     * @return  self
     */ 
    public function setSubscribeToBroadcasts(bool $subscribeToBroadcasts)
    {
        $this->subscribeToBroadcasts = $subscribeToBroadcasts;

        return $this;
    }

    /**
     * Get the value of subscribeFromIPAddress
     */ 
    public function getSubscribeFromIPAddress()
    {
        return $this->subscribeFromIPAddress;
    }

    /**
     * Set the value of subscribeFromIPAddress
     *
     * @return  self
     */ 
    public function setSubscribeFromIPAddress(string $subscribeFromIPAddress)
    {
        $this->subscribeFromIPAddress = $subscribeFromIPAddress;

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
     * Get the value of payableToName
     */ 
    public function getPayableToName()
    {
        return $this->payableToName;
    }

    /**
     * Set the value of payableToName
     *
     * @return  self
     */ 
    public function setPayableToName(string $payableToName)
    {
        $this->payableToName = $payableToName;

        return $this;
    }

    /**
     * Get the value of createdDate
     */ 
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set the value of createdDate
     *
     * @return  self
     */ 
    public function setCreatedDate(string $createdDate)
    {
        $this->createdDate = $createdDate;

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
    public function setLanguageID(string $languageID)
    {
        $this->languageID = $languageID;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender(string $gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of vatRegistration
     */ 
    public function getVatRegistration()
    {
        return $this->vatRegistration;
    }

    /**
     * Set the value of vatRegistration
     *
     * @return  self
     */ 
    public function setVatRegistration(string $vatRegistration)
    {
        $this->vatRegistration = $vatRegistration;

        return $this;
    }

    /**
     * Get the value of date1
     */ 
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set the value of date1
     *
     * @return  self
     */ 
    public function setDate1(string $date1)
    {
        $this->date1 = $date1;

        return $this;
    }

    /**
     * Get the value of date2
     */ 
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set the value of date2
     *
     * @return  self
     */ 
    public function setDate2(string $date2)
    {
        $this->date2 = $date2;

        return $this;
    }

    /**
     * Get the value of date3
     */ 
    public function getDate3()
    {
        return $this->date3;
    }

    /**
     * Set the value of date3
     *
     * @return  self
     */ 
    public function setDate3(string $date3)
    {
        $this->date3 = $date3;

        return $this;
    }

    /**
     * Get the value of date4
     */ 
    public function getDate4()
    {
        return $this->date4;
    }

    /**
     * Set the value of date4
     *
     * @return  self
     */ 
    public function setDate4(string $date4)
    {
        $this->date4 = $date4;

        return $this;
    }

    /**
     * Get the value of date5
     */ 
    public function getDate5()
    {
        return $this->date5;
    }

    /**
     * Set the value of date5
     *
     * @return  self
     */ 
    public function setDate5(string $date5)
    {
        $this->date5 = $date5;

        return $this;
    }

    /**
     * Get the value of middleName
     */ 
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set the value of middleName
     *
     * @return  self
     */ 
    public function setMiddleName(string $middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Get the value of nameSuffix
     */ 
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Set the value of nameSuffix
     *
     * @return  self
     */ 
    public function setNameSuffix(string $nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * Get the value of binaryPlacementPreference
     */ 
    public function getBinaryPlacementPreference()
    {
        return $this->binaryPlacementPreference;
    }

    /**
     * Set the value of binaryPlacementPreference
     *
     * @return  self
     */ 
    public function setBinaryPlacementPreference(int $binaryPlacementPreference)
    {
        $this->binaryPlacementPreference = $binaryPlacementPreference;

        return $this;
    }

    /**
     * Get the value of useBinaryHoldingTank
     */ 
    public function getUseBinaryHoldingTank()
    {
        return $this->useBinaryHoldingTank;
    }

    /**
     * Set the value of useBinaryHoldingTank
     *
     * @return  self
     */ 
    public function setUseBinaryHoldingTank(bool $useBinaryHoldingTank)
    {
        $this->useBinaryHoldingTank = $useBinaryHoldingTank;

        return $this;
    }

    /**
     * Get the value of mainAddressVerified
     */ 
    public function getMainAddressVerified()
    {
        return $this->mainAddressVerified;
    }

    /**
     * Set the value of mainAddressVerified
     *
     * @return  self
     */ 
    public function setMainAddressVerified(bool $mainAddressVerified)
    {
        $this->mainAddressVerified = $mainAddressVerified;

        return $this;
    }

    /**
     * Get the value of mailAddressVerified
     */ 
    public function getMailAddressVerified()
    {
        return $this->mailAddressVerified;
    }

    /**
     * Set the value of mailAddressVerified
     *
     * @return  self
     */ 
    public function setMailAddressVerified(bool $mailAddressVerified)
    {
        $this->mailAddressVerified = $mailAddressVerified;

        return $this;
    }

    /**
     * Get the value of otherAddressVerified
     */ 
    public function getOtherAddressVerified()
    {
        return $this->otherAddressVerified;
    }

    /**
     * Set the value of otherAddressVerified
     *
     * @return  self
     */ 
    public function setOtherAddressVerified(bool $otherAddressVerified)
    {
        $this->otherAddressVerified = $otherAddressVerified;

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
     * Get the value of payableTy
     */ 
    public function getPayableTy()
    {
        return $this->payableTy;
    }

    /**
     * Set the value of payableTy
     *
     * @return  self
     */ 
    public function setPayableTy(string $payableTy)
    {
        $this->payableTy = $payableTy;

        return $this;
    }

    /**
     * Get the value of taxIDTy
     */ 
    public function getTaxIDTy()
    {
        return $this->taxIDTy;
    }

    /**
     * Set the value of taxIDTy
     *
     * @return  self
     */ 
    public function setTaxIDTy(string $taxIDTy)
    {
        $this->taxIDTy = $taxIDTy;

        return $this;
    }

    /**
     * Get the value of defaultWarehouseID
     */ 
    public function getDefaultWarehouseID()
    {
        return $this->defaultWarehouseID;
    }

    /**
     * Set the value of defaultWarehouseID
     *
     * @return  self
     */ 
    public function setDefaultWarehouseID(int $defaultWarehouseID)
    {
        $this->defaultWarehouseID = $defaultWarehouseID;

        return $this;
    }

    /**
     * Get the value of checkThreshold
     */ 
    public function getCheckThreshold()
    {
        return $this->checkThreshold;
    }

    /**
     * Set the value of checkThreshold
     *
     * @return  self
     */ 
    public function setCheckThreshold(int $checkThreshold)
    {
        $this->checkThreshold = $checkThreshold;

        return $this;
    }
}
