<?php

namespace Thiio\Exigo\Requests\Customers;

use Thiio\Exigo\Requests\ExigoRequest;

class SetCustomerSite extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/customers/site";

    public $customerID;
    public $webAlias;
    public $firstName;
    public $lastName;
    public $company;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zip;
    public $country;
    public $email;
    public $phone;
    public $phone2;
    public $fax;
    public $notes1;
    public $notes2;
    public $notes3;
    public $notes4;
    public $url1;
    public $url2;
    public $url3;
    public $url4;
    public $url5;
    public $url6;
    public $url7;
    public $url8;
    public $url9;
    public $url10;
    public $url1Description;
    public $url2Description;
    public $url3Description;
    public $url4Description;
    public $url5Description;
    public $url6Description;
    public $url7Description;
    public $url8Description;
    public $url9Description;
    public $url10Description;
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
 * Set the value of webAlias
 *
 * @return  self
 */ 
public function setWebAlias( string $webAlias)
{
$this->webAlias = $webAlias;

return $this;
}

/**
 * Set the value of firstName
 *
 * @return  self
 */ 
public function setFirstName( string $firstName)
{
$this->firstName = $firstName;

return $this;
}

/**
 * Set the value of lastName
 *
 * @return  self
 */ 
public function setLastName( string $lastName)
{
$this->lastName = $lastName;

return $this;
}

/**
 * Set the value of company
 *
 * @return  self
 */ 
public function setCompany( string $company)
{
$this->company = $company;

return $this;
}

/**
 * Set the value of address1
 *
 * @return  self
 */ 
public function setAddress1( string $address1)
{
$this->address1 = $address1;

return $this;
}

/**
 * Set the value of address2
 *
 * @return  self
 */ 
public function setAddress2( string $address2)
{
$this->address2 = $address2;

return $this;
}

/**
 * Set the value of city
 *
 * @return  self
 */ 
public function setCity( string $city)
{
$this->city = $city;

return $this;
}

/**
 * Set the value of state
 *
 * @return  self
 */ 
public function setState( string $state)
{
$this->state = $state;

return $this;
}

/**
 * Set the value of zip
 *
 * @return  self
 */ 
public function setZip( string $zip)
{
$this->zip = $zip;

return $this;
}

/**
 * Set the value of country
 *
 * @return  self
 */ 
public function setCountry( string $country)
{
$this->country = $country;

return $this;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail( string $email)
{
$this->email = $email;

return $this;
}

/**
 * Set the value of phone
 *
 * @return  self
 */ 
public function setPhone( string $phone)
{
$this->phone = $phone;

return $this;
}

/**
 * Set the value of phone2
 *
 * @return  self
 */ 
public function setPhone2( string $phone2)
{
$this->phone2 = $phone2;

return $this;
}

/**
 * Set the value of fax
 *
 * @return  self
 */ 
public function setFax( string $fax)
{
$this->fax = $fax;

return $this;
}

/**
 * Set the value of notes1
 *
 * @return  self
 */ 
public function setNotes1( string $notes1)
{
$this->notes1 = $notes1;

return $this;
}

/**
 * Set the value of notes2
 *
 * @return  self
 */ 
public function setNotes2( string $notes2)
{
$this->notes2 = $notes2;

return $this;
}

/**
 * Set the value of notes3
 *
 * @return  self
 */ 
public function setNotes3( string $notes3)
{
$this->notes3 = $notes3;

return $this;
}

/**
 * Set the value of notes4
 *
 * @return  self
 */ 
public function setNotes4( string $notes4)
{
$this->notes4 = $notes4;

return $this;
}

/**
 * Set the value of url1
 *
 * @return  self
 */ 
public function setUrl1( string $url1)
{
$this->url1 = $url1;

return $this;
}

/**
 * Set the value of url2
 *
 * @return  self
 */ 
public function setUrl2( string $url2)
{
$this->url2 = $url2;

return $this;
}

/**
 * Set the value of url3
 *
 * @return  self
 */ 
public function setUrl3( string $url3)
{
$this->url3 = $url3;

return $this;
}

/**
 * Set the value of url4
 *
 * @return  self
 */ 
public function setUrl4( string $url4)
{
$this->url4 = $url4;

return $this;
}

/**
 * Set the value of url5
 *
 * @return  self
 */ 
public function setUrl5( string $url5)
{
$this->url5 = $url5;

return $this;
}

/**
 * Set the value of url6
 *
 * @return  self
 */ 
public function setUrl6( string $url6)
{
$this->url6 = $url6;

return $this;
}

/**
 * Set the value of url7
 *
 * @return  self
 */ 
public function setUrl7( string $url7)
{
$this->url7 = $url7;

return $this;
}

/**
 * Set the value of url8
 *
 * @return  self
 */ 
public function setUrl8( string $url8)
{
$this->url8 = $url8;

return $this;
}

/**
 * Set the value of url9
 *
 * @return  self
 */ 
public function setUrl9( string $url9)
{
$this->url9 = $url9;

return $this;
}

/**
 * Set the value of url10
 *
 * @return  self
 */ 
public function setUrl10( string $url10)
{
$this->url10 = $url10;

return $this;
}

/**
 * Set the value of url1Description
 *
 * @return  self
 */ 
public function setUrl1Description( string $url1Description)
{
$this->url1Description = $url1Description;

return $this;
}

/**
 * Set the value of url2Description
 *
 * @return  self
 */ 
public function setUrl2Description( string $url2Description)
{
$this->url2Description = $url2Description;

return $this;
}

/**
 * Set the value of url3Description
 *
 * @return  self
 */ 
public function setUrl3Description( string $url3Description)
{
$this->url3Description = $url3Description;

return $this;
}

/**
 * Set the value of url4Description
 *
 * @return  self
 */ 
public function setUrl4Description( string $url4Description)
{
$this->url4Description = $url4Description;

return $this;
}

/**
 * Set the value of url5Description
 *
 * @return  self
 */ 
public function setUrl5Description( string $url5Description)
{
$this->url5Description = $url5Description;

return $this;
}

/**
 * Set the value of url6Description
 *
 * @return  self
 */ 
public function setUrl6Description( string $url6Description)
{
$this->url6Description = $url6Description;

return $this;
}

/**
 * Set the value of url7Description
 *
 * @return  self
 */ 
public function setUrl7Description( string $url7Description)
{
$this->url7Description = $url7Description;

return $this;
}

/**
 * Set the value of url8Description
 *
 * @return  self
 */ 
public function setUrl8Description( string $url8Description)
{
$this->url8Description = $url8Description;

return $this;
}

/**
 * Set the value of url9Description
 *
 * @return  self
 */ 
public function setUrl9Description( string $url9Description)
{
$this->url9Description = $url9Description;

return $this;
}

/**
 * Set the value of url10Description
 *
 * @return  self
 */ 
public function setUrl10Description( string $url10Description)
{
$this->url10Description = $url10Description;

return $this;
}

/**
 * Set the value of customerKey
 *
 * @return  self
 */ 
public function setCustomerKey( string $customerKey)
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
 * Get the value of webAlias
 */ 
public function getWebAlias()
{
return $this->webAlias;
}

/**
 * Get the value of firstName
 */ 
public function getFirstName()
{
return $this->firstName;
}

/**
 * Get the value of lastName
 */ 
public function getLastName()
{
return $this->lastName;
}

/**
 * Get the value of company
 */ 
public function getCompany()
{
return $this->company;
}

/**
 * Get the value of address1
 */ 
public function getAddress1()
{
return $this->address1;
}

/**
 * Get the value of address2
 */ 
public function getAddress2()
{
return $this->address2;
}

/**
 * Get the value of city
 */ 
public function getCity()
{
return $this->city;
}

/**
 * Get the value of state
 */ 
public function getState()
{
return $this->state;
}

/**
 * Get the value of zip
 */ 
public function getZip()
{
return $this->zip;
}

/**
 * Get the value of country
 */ 
public function getCountry()
{
return $this->country;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Get the value of phone
 */ 
public function getPhone()
{
return $this->phone;
}

/**
 * Get the value of phone2
 */ 
public function getPhone2()
{
return $this->phone2;
}

/**
 * Get the value of fax
 */ 
public function getFax()
{
return $this->fax;
}

/**
 * Get the value of notes1
 */ 
public function getNotes1()
{
return $this->notes1;
}

/**
 * Get the value of notes2
 */ 
public function getNotes2()
{
return $this->notes2;
}

/**
 * Get the value of notes3
 */ 
public function getNotes3()
{
return $this->notes3;
}

/**
 * Get the value of notes4
 */ 
public function getNotes4()
{
return $this->notes4;
}

/**
 * Get the value of url1
 */ 
public function getUrl1()
{
return $this->url1;
}

/**
 * Get the value of url2
 */ 
public function getUrl2()
{
return $this->url2;
}

/**
 * Get the value of url3
 */ 
public function getUrl3()
{
return $this->url3;
}

/**
 * Get the value of url4
 */ 
public function getUrl4()
{
return $this->url4;
}

/**
 * Get the value of url5
 */ 
public function getUrl5()
{
return $this->url5;
}

/**
 * Get the value of url6
 */ 
public function getUrl6()
{
return $this->url6;
}

/**
 * Get the value of url7
 */ 
public function getUrl7()
{
return $this->url7;
}

/**
 * Get the value of url8
 */ 
public function getUrl8()
{
return $this->url8;
}

/**
 * Get the value of url9
 */ 
public function getUrl9()
{
return $this->url9;
}

/**
 * Get the value of url10
 */ 
public function getUrl10()
{
return $this->url10;
}

/**
 * Get the value of url1Description
 */ 
public function getUrl1Description()
{
return $this->url1Description;
}

/**
 * Get the value of url2Description
 */ 
public function getUrl2Description()
{
return $this->url2Description;
}

/**
 * Get the value of url3Description
 */ 
public function getUrl3Description()
{
return $this->url3Description;
}

/**
 * Get the value of url4Description
 */ 
public function getUrl4Description()
{
return $this->url4Description;
}

/**
 * Get the value of url5Description
 */ 
public function getUrl5Description()
{
return $this->url5Description;
}

/**
 * Get the value of url6Description
 */ 
public function getUrl6Description()
{
return $this->url6Description;
}

/**
 * Get the value of url7Description
 */ 
public function getUrl7Description()
{
return $this->url7Description;
}

/**
 * Get the value of url8Description
 */ 
public function getUrl8Description()
{
return $this->url8Description;
}

/**
 * Get the value of url9Description
 */ 
public function getUrl9Description()
{
return $this->url9Description;
}

/**
 * Get the value of url10Description
 */ 
public function getUrl10Description()
{
return $this->url10Description;
}

/**
 * Get the value of customerKey
 */ 
public function getCustomerKey()
{
return $this->customerKey;
}
}
