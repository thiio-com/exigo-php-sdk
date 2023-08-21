<?php

use Thiio\Exigo\Http\ExigoApi;
use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\Customers\SetCustomerSite;

#vendor/bin/phpunit tests/SetCustomerSiteTest.php
class SetCustomerSiteTest extends TestCase
{


     /**
     * @test
     */
    public function it_should_create_a_set_customer_site_instance(): void{

        $setCustomerSiteRequest = new SetCustomerSite();

        $this->assertInstanceOf(SetCustomerSite::class, $setCustomerSiteRequest);

    }


    private function getBlueprint(){

        $faker = Faker\Factory::create();
        return [
            'customerID' => 100,
            'webAlias' => "webAlias",
            'firstName' => "firstName",
            'lastName' => "lastName",
            'company' => "company",
            'address1' => "address1",
            'address2' => "address2",
            'city' => "city",
            'state' => "state",
            'zip' => "zip",
            'country' => "country",
            'email' => "email",
            'phone' => "phone",
            'phone2' => "phone2",
            'fax' => "fax",
            'notes1' => "notes1",
            'notes2' => "notes2",
            'notes3' => "notes3",
            'notes4' => "notes4",
            'url1' => "url1",
            'url2' => "url2",
            'url3' => "url3",
            'url4' => "url4",
            'url5' => "url5",
            'url6' => "url6",
            'url7' => "url7",
            'url8' => "url8",
            'url9' => "url9",
            'url10' => "url10",
            'url1Description' => "url1Description",
            'url2Description' => "url2Description",
            'url3Description' => "url3Description",
            'url4Description' => "url4Description",
            'url5Description' => "url5Description",
            'url6Description' => "url6Description",
            'url7Description' => "url7Description",
            'url8Description' => "url8Description",
            'url9Description' => "url9Description",
            'url10Description' => "url10Description",
            'customerKey' => "customerKey",
        ];


    }


     /**
     * @test
     */
    public function it_should_fill_a_set_customer_site_instance(): void{

        $data = $this->getBlueprint();
        
        $setCustomerSiteRequest = new SetCustomerSite();

        $setCustomerSiteRequest->setCustomerID($data['customerID']);
        $setCustomerSiteRequest->setWebAlias($data['webAlias']);
        $setCustomerSiteRequest->setFirstName($data['firstName']);
        $setCustomerSiteRequest->setLastName($data['lastName']);
        $setCustomerSiteRequest->setCompany($data['company']);
        $setCustomerSiteRequest->setAddress1($data['address1']);
        $setCustomerSiteRequest->setAddress2($data['address2']);
        $setCustomerSiteRequest->setCity($data['city']);
        $setCustomerSiteRequest->setState($data['state']);
        $setCustomerSiteRequest->setZip($data['zip']);
        $setCustomerSiteRequest->setCountry($data['country']);
        $setCustomerSiteRequest->setEmail($data['email']);
        $setCustomerSiteRequest->setPhone($data['phone']);
        $setCustomerSiteRequest->setPhone2($data['phone2']);
        $setCustomerSiteRequest->setFax($data['fax']);
        $setCustomerSiteRequest->setNotes1($data['notes1']);
        $setCustomerSiteRequest->setNotes2($data['notes2']);
        $setCustomerSiteRequest->setNotes3($data['notes3']);
        $setCustomerSiteRequest->setNotes4($data['notes4']);
        $setCustomerSiteRequest->setUrl1($data['url1']);
        $setCustomerSiteRequest->setUrl2($data['url2']);
        $setCustomerSiteRequest->setUrl3($data['url3']);
        $setCustomerSiteRequest->setUrl4($data['url4']);
        $setCustomerSiteRequest->setUrl5($data['url5']);
        $setCustomerSiteRequest->setUrl6($data['url6']);
        $setCustomerSiteRequest->setUrl7($data['url7']);
        $setCustomerSiteRequest->setUrl8($data['url8']);
        $setCustomerSiteRequest->setUrl9($data['url9']);
        $setCustomerSiteRequest->setUrl10($data['url10']);
        $setCustomerSiteRequest->setUrl1Description($data['url1Description']);
        $setCustomerSiteRequest->setUrl2Description($data['url2Description']);
        $setCustomerSiteRequest->setUrl3Description($data['url3Description']);
        $setCustomerSiteRequest->setUrl4Description($data['url4Description']);
        $setCustomerSiteRequest->setUrl5Description($data['url5Description']);
        $setCustomerSiteRequest->setUrl6Description($data['url6Description']);
        $setCustomerSiteRequest->setUrl7Description($data['url7Description']);
        $setCustomerSiteRequest->setUrl8Description($data['url8Description']);
        $setCustomerSiteRequest->setUrl9Description($data['url9Description']);
        $setCustomerSiteRequest->setUrl10Description($data['url10Description']);
        $setCustomerSiteRequest->setCustomerKey($data['customerKey']);


        $this->assertEquals($setCustomerSiteRequest->getCustomerID(),$data['customerID']);
        $this->assertEquals($setCustomerSiteRequest->getWebAlias(),$data['webAlias']);
        $this->assertEquals($setCustomerSiteRequest->getFirstName(),$data['firstName']);
        $this->assertEquals($setCustomerSiteRequest->getLastName(),$data['lastName']);
        $this->assertEquals($setCustomerSiteRequest->getCompany(),$data['company']);
        $this->assertEquals($setCustomerSiteRequest->getAddress1(),$data['address1']);
        $this->assertEquals($setCustomerSiteRequest->getAddress2(),$data['address2']);
        $this->assertEquals($setCustomerSiteRequest->getCity(),$data['city']);
        $this->assertEquals($setCustomerSiteRequest->getState(),$data['state']);
        $this->assertEquals($setCustomerSiteRequest->getZip(),$data['zip']);
        $this->assertEquals($setCustomerSiteRequest->getCountry(),$data['country']);
        $this->assertEquals($setCustomerSiteRequest->getEmail(),$data['email']);
        $this->assertEquals($setCustomerSiteRequest->getPhone(),$data['phone']);
        $this->assertEquals($setCustomerSiteRequest->getPhone2(),$data['phone2']);
        $this->assertEquals($setCustomerSiteRequest->getFax(),$data['fax']);
        $this->assertEquals($setCustomerSiteRequest->getNotes1(),$data['notes1']);
        $this->assertEquals($setCustomerSiteRequest->getNotes2(),$data['notes2']);
        $this->assertEquals($setCustomerSiteRequest->getNotes3(),$data['notes3']);
        $this->assertEquals($setCustomerSiteRequest->getNotes4(),$data['notes4']);
        $this->assertEquals($setCustomerSiteRequest->getUrl1(),$data['url1']);
        $this->assertEquals($setCustomerSiteRequest->getUrl2(),$data['url2']);
        $this->assertEquals($setCustomerSiteRequest->getUrl3(),$data['url3']);
        $this->assertEquals($setCustomerSiteRequest->getUrl4(),$data['url4']);
        $this->assertEquals($setCustomerSiteRequest->getUrl5(),$data['url5']);
        $this->assertEquals($setCustomerSiteRequest->getUrl6(),$data['url6']);
        $this->assertEquals($setCustomerSiteRequest->getUrl7(),$data['url7']);
        $this->assertEquals($setCustomerSiteRequest->getUrl8(),$data['url8']);
        $this->assertEquals($setCustomerSiteRequest->getUrl9(),$data['url9']);
        $this->assertEquals($setCustomerSiteRequest->getUrl10(),$data['url10']);
        $this->assertEquals($setCustomerSiteRequest->getUrl1Description(),$data['url1Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl2Description(),$data['url2Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl3Description(),$data['url3Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl4Description(),$data['url4Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl5Description(),$data['url5Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl6Description(),$data['url6Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl7Description(),$data['url7Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl8Description(),$data['url8Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl9Description(),$data['url9Description']);
        $this->assertEquals($setCustomerSiteRequest->getUrl10Description(),$data['url10Description']);
        $this->assertEquals($setCustomerSiteRequest->getCustomerKey(),$data['customerKey']);

    }


      /**
     * @test
     */
    public function it_should_fail_creating_a_customer_site_on_ecigo(): void{

        $data = $this->getBlueprint();
        
        $setCustomerSiteRequest = new SetCustomerSite();

        $setCustomerSiteRequest->setCustomerID($data['customerID']);
        $setCustomerSiteRequest->setWebAlias($data['webAlias']);
        $setCustomerSiteRequest->setFirstName($data['firstName']);
        $setCustomerSiteRequest->setLastName($data['lastName']);
        $setCustomerSiteRequest->setCompany($data['company']);
        $setCustomerSiteRequest->setAddress1($data['address1']);
        $setCustomerSiteRequest->setAddress2($data['address2']);
        $setCustomerSiteRequest->setCity($data['city']);
        $setCustomerSiteRequest->setState($data['state']);
        $setCustomerSiteRequest->setZip($data['zip']);
        $setCustomerSiteRequest->setCountry($data['country']);
        $setCustomerSiteRequest->setEmail($data['email']);
        $setCustomerSiteRequest->setPhone($data['phone']);
        $setCustomerSiteRequest->setPhone2($data['phone2']);
        $setCustomerSiteRequest->setFax($data['fax']);
        $setCustomerSiteRequest->setNotes1($data['notes1']);
        $setCustomerSiteRequest->setNotes2($data['notes2']);
        $setCustomerSiteRequest->setNotes3($data['notes3']);
        $setCustomerSiteRequest->setNotes4($data['notes4']);
        $setCustomerSiteRequest->setUrl1($data['url1']);
        $setCustomerSiteRequest->setUrl2($data['url2']);
        $setCustomerSiteRequest->setUrl3($data['url3']);
        $setCustomerSiteRequest->setUrl4($data['url4']);
        $setCustomerSiteRequest->setUrl5($data['url5']);
        $setCustomerSiteRequest->setUrl6($data['url6']);
        $setCustomerSiteRequest->setUrl7($data['url7']);
        $setCustomerSiteRequest->setUrl8($data['url8']);
        $setCustomerSiteRequest->setUrl9($data['url9']);
        $setCustomerSiteRequest->setUrl10($data['url10']);
        $setCustomerSiteRequest->setUrl1Description($data['url1Description']);
        $setCustomerSiteRequest->setUrl2Description($data['url2Description']);
        $setCustomerSiteRequest->setUrl3Description($data['url3Description']);
        $setCustomerSiteRequest->setUrl4Description($data['url4Description']);
        $setCustomerSiteRequest->setUrl5Description($data['url5Description']);
        $setCustomerSiteRequest->setUrl6Description($data['url6Description']);
        $setCustomerSiteRequest->setUrl7Description($data['url7Description']);
        $setCustomerSiteRequest->setUrl8Description($data['url8Description']);
        $setCustomerSiteRequest->setUrl9Description($data['url9Description']);
        $setCustomerSiteRequest->setUrl10Description($data['url10Description']);
        $setCustomerSiteRequest->setCustomerKey($data['customerKey']);


        $client = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);

        $response = $client->setCustomerSite($setCustomerSiteRequest);

        $this->assertFalse($response->success);
        

    }




}
