<?php

use PHPUnit\Framework\TestCase;

use Thiio\Exigo\Requests\Customers\CreateCustomer;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\Customers\UpdateCustomer;

#vendor/bin/phpunit tests/UpdateCustomerTest.php
class UpdateCustomerTest extends TestCase
{


    /**
     * @test
     */
    public function it_should_create_an_create_customer_instance(){
        
        $updateCustomerRequest = new UpdateCustomer();
        
        $this->assertInstanceOf(UpdateCustomer::class, $updateCustomerRequest);

    }

    private function buildCustomerBlueprint(){
        $faker = Faker\Factory::create();
        return [
            "firstName"                 => $faker->firstName(),
            "lastName"                  => $faker->lastName(),
            "company"                   => $faker->company(),
            "customerType"              => 1,
            "customerStatus"            => 1,
            "email"                     => $faker->email(),
            "phone"                     => $faker->phoneNumber(),
            "phone2"                    => $faker->phoneNumber(),
            "mobilePhone"               => $faker->phoneNumber(),
            "fax"                       => $faker->phoneNumber(),
            "notes"                     => "This is a demo note",
            "mainAddress1"              => $faker->streetAddress(),
            "mainAddress2"              => "",
            "mainAddress3"              => "",
            "mainCity"                  => $faker->city(),
            "mainState"                 => $faker->state(),
            "mainZip"                   => $faker->postcode(),
            "mainCountry"               => $faker->country(),
            "mainCounty"                => "",
            "mailAddress1"              => $faker->streetAddress(),
            "mailAddress2"              => "",
            "mailAddress3"              => "",
            "mailCity"                  => $faker->city(),
            "mailState"                 => $faker->state(),
            "mailZip"                   => $faker->postcode(),
            "mailCountry"               => $faker->country(),
            "mailCounty"                => "",
            "otherAddress1"             => $faker->streetAddress(),
            "otherAddress2"             => "",
            "otherAddress3"             => "",
            "otherCity"                 => $faker->city(),
            "otherState"                => $faker->state(),
            "otherZip"                  => $faker->postcode(),
            "otherCountry"              => $faker->country(),
            "otherCounty"               => "",
            "canLogin"                  => true,
            "loginName"                 => $faker->userName(),
            "loginPassword"             => $faker->password(),
            "insertEnrollerTree"        => false,
            "enrollerID"                => 1,
            "insertUnilevelTree"        => false,
            "sponsorID"                 => 1,
            "useManualCustomerID"       => false,
            "manualCustomerID"          => 1,
            "taxID"                     => "",
            "salesTaxID"                => "",
            "salesTaxExemptExpireDate"  => (new DateTime())->format('Y-m-d H:m:s'),
            "isSalesTaxExempt"          => false,
            "birthDate"                 => (new DateTime())->format('Y-m-d H:m:s'),
            "field1"                    => "field1",
            "field2"                    => "field2",
            "field3"                    => "field3",
            "field4"                    => "field4",
            "field5"                    => "field5",
            "field6"                    => "field6",
            "field7"                    => "field7",
            "field8"                    => "field8",
            "field9"                    => "field9",
            "field10"                   => "field10",
            "field11"                   => "field11",
            "field12"                   => "field12",
            "field13"                   => "field13",
            "field14"                   => "field14",
            "field15"                   => "field15",
            "subscribeToBroadcasts"     => false,
            "subscribeFromIPAddress"    => $faker->ipv4(),
            "currencyCode"              => "usd",
            "payableToName"             => $faker->name(),
            "entryDate"                 => (new DateTime())->format('Y-m-d H:m:s'),
            "defaultWarehouseID"        => 1,
            "checkThreshold"            => 2,
            "taxIDType"                 => 1,
            "languageID"                => 0,
            "gender"                    => "Male",
            "vatRegistration"           => "",
            "date1"                     => (new DateTime())->format('Y-m-d H:m:s'),
            "date2"                     => (new DateTime())->format('Y-m-d H:m:s'),
            "date3"                     => (new DateTime())->format('Y-m-d H:m:s'),
            "date4"                     => (new DateTime())->format('Y-m-d H:m:s'),
            "date5"                     => (new DateTime())->format('Y-m-d H:m:s'),
            "middleName"                => $faker->name(),
            "nameSuffix"                => "Jr",
            "binaryPlacementPreference" => 1,
            "useBinaryHoldingTank"      => true,
            "mainAddressVerified"       => true,
            "mailAddressVerified"       => false,
            "otherAddressVerified"      => false,
            "sponsorKey"                => "",
            "enrollerKey"               => "",
            "manualCustomerKey"         => "",
            "payableTy"                 => "",
        ];
    }

    /**
     * @test
     */
    public function it_should_fill_instance_with_values(){
        
        $data = $this->buildCustomerBlueprint();

        $createCustomerRequest = new UpdateCustomer();
        
        $createCustomerRequest->setFirstName($data['firstName']);
        $createCustomerRequest->setLastName($data['lastName']);
        $createCustomerRequest->setCompany($data['company']);
        $createCustomerRequest->setCustomerType($data['customerType']);
        $createCustomerRequest->setCustomerStatus($data['customerStatus']);
        $createCustomerRequest->setEmail($data['email']);
        $createCustomerRequest->setPhone($data['phone']);
        $createCustomerRequest->setPhone2($data['phone2']);
        $createCustomerRequest->setMobilePhone($data['mobilePhone']);
        $createCustomerRequest->setFax($data['fax']);
        $createCustomerRequest->setMainAddress1($data['mainAddress1']);
        $createCustomerRequest->setMainAddress2($data['mainAddress2']);
        $createCustomerRequest->setMainAddress3($data['mainAddress3']);
        $createCustomerRequest->setMainCity($data['mainCity']);
        $createCustomerRequest->setMainState($data['mainState']);
        $createCustomerRequest->setMainZip($data['mainZip']);
        $createCustomerRequest->setMainCountry($data['mainCountry']);
        $createCustomerRequest->setMainCounty($data['mainCounty']);
        $createCustomerRequest->setMailAddress1($data['mailAddress1']);
        $createCustomerRequest->setMailAddress2($data['mailAddress2']);
        $createCustomerRequest->setMailAddress3($data['mailAddress3']);
        $createCustomerRequest->setMailCity($data['mailCity']);
        $createCustomerRequest->setMailState($data['mailState']);
        $createCustomerRequest->setMailZip($data['mailZip']);
        $createCustomerRequest->setMailCountry($data['mailCountry']);
        $createCustomerRequest->setMailCounty($data['mailCounty']);
        $createCustomerRequest->setOtherAddress1($data['otherAddress1']);
        $createCustomerRequest->setOtherAddress2($data['otherAddress2']);
        $createCustomerRequest->setOtherAddress3($data['otherAddress3']);
        $createCustomerRequest->setOtherCity($data['otherCity']);
        $createCustomerRequest->setOtherState($data['otherState']);
        $createCustomerRequest->setOtherZip($data['otherZip']);
        $createCustomerRequest->setOtherCountry($data['otherCountry']);
        $createCustomerRequest->setOtherCounty($data['otherCounty']);
        $createCustomerRequest->setCanLogin($data['canLogin']);
        $createCustomerRequest->setLoginName($data['loginName']);
        $createCustomerRequest->setLoginPassword($data['loginPassword']);
        $createCustomerRequest->setTaxID($data['taxID']);
        $createCustomerRequest->setSalesTaxID($data['salesTaxID']);
        $createCustomerRequest->setSalesTaxExemptExpireDate($data['salesTaxExemptExpireDate']);
        $createCustomerRequest->setIsSalesTaxExempt($data['isSalesTaxExempt']);
        $createCustomerRequest->setBirthDate($data['birthDate']);
        $createCustomerRequest->setField1($data['field1']);
        $createCustomerRequest->setField2($data['field2']);
        $createCustomerRequest->setField3($data['field3']);
        $createCustomerRequest->setField4($data['field4']);
        $createCustomerRequest->setField5($data['field5']);
        $createCustomerRequest->setField6($data['field6']);
        $createCustomerRequest->setField7($data['field7']);
        $createCustomerRequest->setField8($data['field8']);
        $createCustomerRequest->setField9($data['field9']);
        $createCustomerRequest->setField10($data['field10']);
        $createCustomerRequest->setField11($data['field11']);
        $createCustomerRequest->setField12($data['field12']);
        $createCustomerRequest->setField13($data['field13']);
        $createCustomerRequest->setField14($data['field14']);
        $createCustomerRequest->setField15($data['field15']);
        $createCustomerRequest->setSubscribeToBroadcasts($data['subscribeToBroadcasts']);
        $createCustomerRequest->setSubscribeFromIPAddress($data['subscribeFromIPAddress']);
        $createCustomerRequest->setCurrencyCode($data['currencyCode']);
        $createCustomerRequest->setPayableToName($data['payableToName']);
        $createCustomerRequest->setDefaultWarehouseID($data['defaultWarehouseID']);
        $createCustomerRequest->setCheckThreshold($data['checkThreshold']);
        $createCustomerRequest->setTaxIDTy($data['taxIDType']);
        $createCustomerRequest->setLanguageID($data['languageID']);
        $createCustomerRequest->setGender($data['gender']);
        $createCustomerRequest->setVatRegistration($data['vatRegistration']);
        $createCustomerRequest->setDate1($data['date1']);
        $createCustomerRequest->setDate2($data['date2']);
        $createCustomerRequest->setDate3($data['date3']);
        $createCustomerRequest->setDate4($data['date4']);
        $createCustomerRequest->setDate5($data['date5']);
        $createCustomerRequest->setMiddleName($data['middleName']);
        $createCustomerRequest->setNameSuffix($data['nameSuffix']);
        $createCustomerRequest->setBinaryPlacementPreference($data['binaryPlacementPreference']);
        $createCustomerRequest->setUseBinaryHoldingTank($data['useBinaryHoldingTank']);
        $createCustomerRequest->setMainAddressVerified($data['mainAddressVerified']);
        $createCustomerRequest->setMailAddressVerified($data['mailAddressVerified']);
        $createCustomerRequest->setOtherAddressVerified($data['otherAddressVerified']);
        $createCustomerRequest->setPayableTy($data['payableTy']);


        $this->assertEquals($data['firstName'], $createCustomerRequest->getFirstName());
        $this->assertEquals($data['lastName'], $createCustomerRequest->getLastName());
        $this->assertEquals($data['company'], $createCustomerRequest->getCompany());
        $this->assertEquals($data['customerType'], $createCustomerRequest->getCustomerType());
        $this->assertEquals($data['customerStatus'], $createCustomerRequest->getCustomerStatus());
        $this->assertEquals($data['email'], $createCustomerRequest->getEmail());
        $this->assertEquals($data['phone'], $createCustomerRequest->getPhone());
        $this->assertEquals($data['phone2'], $createCustomerRequest->getPhone2());
        $this->assertEquals($data['mobilePhone'], $createCustomerRequest->getMobilePhone());
        $this->assertEquals($data['fax'], $createCustomerRequest->getFax());
        $this->assertEquals($data['mainAddress1'], $createCustomerRequest->getMainAddress1());
        $this->assertEquals($data['mainAddress2'], $createCustomerRequest->getMainAddress2());
        $this->assertEquals($data['mainAddress3'], $createCustomerRequest->getMainAddress3());
        $this->assertEquals($data['mainCity'], $createCustomerRequest->getMainCity());
        $this->assertEquals($data['mainState'], $createCustomerRequest->getMainState());
        $this->assertEquals($data['mainZip'], $createCustomerRequest->getMainZip());
        $this->assertEquals($data['mainCountry'], $createCustomerRequest->getMainCountry());
        $this->assertEquals($data['mainCounty'], $createCustomerRequest->getMainCounty());
        $this->assertEquals($data['mailAddress1'], $createCustomerRequest->getMailAddress1());
        $this->assertEquals($data['mailAddress2'], $createCustomerRequest->getMailAddress2());
        $this->assertEquals($data['mailAddress3'], $createCustomerRequest->getMailAddress3());
        $this->assertEquals($data['mailCity'], $createCustomerRequest->getMailCity());
        $this->assertEquals($data['mailState'], $createCustomerRequest->getMailState());
        $this->assertEquals($data['mailZip'], $createCustomerRequest->getMailZip());
        $this->assertEquals($data['mailCountry'], $createCustomerRequest->getMailCountry());
        $this->assertEquals($data['mailCounty'], $createCustomerRequest->getMailCounty());
        $this->assertEquals($data['otherAddress1'], $createCustomerRequest->getOtherAddress1());
        $this->assertEquals($data['otherAddress2'], $createCustomerRequest->getOtherAddress2());
        $this->assertEquals($data['otherAddress3'], $createCustomerRequest->getOtherAddress3());
        $this->assertEquals($data['otherCity'], $createCustomerRequest->getOtherCity());
        $this->assertEquals($data['otherState'], $createCustomerRequest->getOtherState());
        $this->assertEquals($data['otherZip'], $createCustomerRequest->getOtherZip());
        $this->assertEquals($data['otherCountry'], $createCustomerRequest->getOtherCountry());
        $this->assertEquals($data['otherCounty'], $createCustomerRequest->getOtherCounty());
        $this->assertEquals($data['canLogin'], $createCustomerRequest->getCanLogin());
        $this->assertEquals($data['loginName'], $createCustomerRequest->getLoginName());
        $this->assertEquals($data['loginPassword'], $createCustomerRequest->getLoginPassword());
        $this->assertEquals($data['taxID'], $createCustomerRequest->getTaxID());
        $this->assertEquals($data['salesTaxID'], $createCustomerRequest->getSalesTaxID());
        $this->assertEquals($data['salesTaxExemptExpireDate'], $createCustomerRequest->getSalesTaxExemptExpireDate());
        $this->assertEquals($data['isSalesTaxExempt'], $createCustomerRequest->getIsSalesTaxExempt());
        $this->assertEquals($data['birthDate'], $createCustomerRequest->getBirthDate());
        $this->assertEquals($data['field1'], $createCustomerRequest->getField1());
        $this->assertEquals($data['field2'], $createCustomerRequest->getField2());
        $this->assertEquals($data['field3'], $createCustomerRequest->getField3());
        $this->assertEquals($data['field4'], $createCustomerRequest->getField4());
        $this->assertEquals($data['field5'], $createCustomerRequest->getField5());
        $this->assertEquals($data['field6'], $createCustomerRequest->getField6());
        $this->assertEquals($data['field7'], $createCustomerRequest->getField7());
        $this->assertEquals($data['field8'], $createCustomerRequest->getField8());
        $this->assertEquals($data['field9'], $createCustomerRequest->getField9());
        $this->assertEquals($data['field10'], $createCustomerRequest->getField10());
        $this->assertEquals($data['field11'], $createCustomerRequest->getField11());
        $this->assertEquals($data['field12'], $createCustomerRequest->getField12());
        $this->assertEquals($data['field13'], $createCustomerRequest->getField13());
        $this->assertEquals($data['field14'], $createCustomerRequest->getField14());
        $this->assertEquals($data['field15'], $createCustomerRequest->getField15());
        $this->assertEquals($data['subscribeToBroadcasts'], $createCustomerRequest->getSubscribeToBroadcasts());
        $this->assertEquals($data['subscribeFromIPAddress'], $createCustomerRequest->getSubscribeFromIPAddress());
        $this->assertEquals($data['currencyCode'], $createCustomerRequest->getCurrencyCode());
        $this->assertEquals($data['payableToName'], $createCustomerRequest->getPayableToName());
        $this->assertEquals($data['defaultWarehouseID'], $createCustomerRequest->getDefaultWarehouseID());
        $this->assertEquals($data['checkThreshold'], $createCustomerRequest->getCheckThreshold());
        $this->assertEquals($data['taxIDType'], $createCustomerRequest->getTaxIDTy());
        $this->assertEquals($data['languageID'], $createCustomerRequest->getLanguageID());
        $this->assertEquals($data['gender'], $createCustomerRequest->getGender());
        $this->assertEquals($data['vatRegistration'], $createCustomerRequest->getVatRegistration());
        $this->assertEquals($data['date1'], $createCustomerRequest->getDate1());
        $this->assertEquals($data['date2'], $createCustomerRequest->getDate2());
        $this->assertEquals($data['date3'], $createCustomerRequest->getDate3());
        $this->assertEquals($data['date4'], $createCustomerRequest->getDate4());
        $this->assertEquals($data['date5'], $createCustomerRequest->getDate5());
        $this->assertEquals($data['middleName'], $createCustomerRequest->getMiddleName());
        $this->assertEquals($data['nameSuffix'], $createCustomerRequest->getNameSuffix());
        $this->assertEquals($data['binaryPlacementPreference'], $createCustomerRequest->getBinaryPlacementPreference());
        $this->assertEquals($data['useBinaryHoldingTank'], $createCustomerRequest->getUseBinaryHoldingTank());
        $this->assertEquals($data['mainAddressVerified'], $createCustomerRequest->getMainAddressVerified());
        $this->assertEquals($data['mailAddressVerified'], $createCustomerRequest->getMailAddressVerified());
        $this->assertEquals($data['otherAddressVerified'], $createCustomerRequest->getOtherAddressVerified());
        $this->assertEquals($data['payableTy'], $createCustomerRequest->getPayableTy());

    }


    /**
     * @test
     */
    public function it_should_serialize_to_array(){
        $data = $this->buildCustomerBlueprint();

        $createCustomerRequest = new UpdateCustomer();
        
        $createCustomerRequest->setFirstName($data['firstName']);
        $createCustomerRequest->setLastName($data['lastName']);
        $createCustomerRequest->setCompany($data['company']);
        $createCustomerRequest->setCustomerType($data['customerType']);
        $createCustomerRequest->setCustomerStatus($data['customerStatus']);
        $createCustomerRequest->setEmail($data['email']);
        $createCustomerRequest->setPhone($data['phone']);
        $createCustomerRequest->setPhone2($data['phone2']);
        $createCustomerRequest->setMobilePhone($data['mobilePhone']);
        $createCustomerRequest->setFax($data['fax']);
        $createCustomerRequest->setMainAddress1($data['mainAddress1']);
        $createCustomerRequest->setMainAddress2($data['mainAddress2']);
        $createCustomerRequest->setMainAddress3($data['mainAddress3']);
        $createCustomerRequest->setMainCity($data['mainCity']);
        $createCustomerRequest->setMainState($data['mainState']);
        $createCustomerRequest->setMainZip($data['mainZip']);
        $createCustomerRequest->setMainCountry($data['mainCountry']);
        $createCustomerRequest->setMainCounty($data['mainCounty']);
        $createCustomerRequest->setMailAddress1($data['mailAddress1']);
        $createCustomerRequest->setMailAddress2($data['mailAddress2']);
        $createCustomerRequest->setMailAddress3($data['mailAddress3']);
        $createCustomerRequest->setMailCity($data['mailCity']);
        $createCustomerRequest->setMailState($data['mailState']);
        $createCustomerRequest->setMailZip($data['mailZip']);
        $createCustomerRequest->setMailCountry($data['mailCountry']);
        $createCustomerRequest->setMailCounty($data['mailCounty']);
        $createCustomerRequest->setOtherAddress1($data['otherAddress1']);
        $createCustomerRequest->setOtherAddress2($data['otherAddress2']);
        $createCustomerRequest->setOtherAddress3($data['otherAddress3']);
        $createCustomerRequest->setOtherCity($data['otherCity']);
        $createCustomerRequest->setOtherState($data['otherState']);
        $createCustomerRequest->setOtherZip($data['otherZip']);
        $createCustomerRequest->setOtherCountry($data['otherCountry']);
        $createCustomerRequest->setOtherCounty($data['otherCounty']);
        $createCustomerRequest->setCanLogin($data['canLogin']);
        $createCustomerRequest->setLoginName($data['loginName']);
        $createCustomerRequest->setLoginPassword($data['loginPassword']);
        $createCustomerRequest->setTaxID($data['taxID']);
        $createCustomerRequest->setSalesTaxID($data['salesTaxID']);
        $createCustomerRequest->setSalesTaxExemptExpireDate($data['salesTaxExemptExpireDate']);
        $createCustomerRequest->setIsSalesTaxExempt($data['isSalesTaxExempt']);
        $createCustomerRequest->setBirthDate($data['birthDate']);
        $createCustomerRequest->setField1($data['field1']);
        $createCustomerRequest->setField2($data['field2']);
        $createCustomerRequest->setField3($data['field3']);
        $createCustomerRequest->setField4($data['field4']);
        $createCustomerRequest->setField5($data['field5']);
        $createCustomerRequest->setField6($data['field6']);
        $createCustomerRequest->setField7($data['field7']);
        $createCustomerRequest->setField8($data['field8']);
        $createCustomerRequest->setField9($data['field9']);
        $createCustomerRequest->setField10($data['field10']);
        $createCustomerRequest->setField11($data['field11']);
        $createCustomerRequest->setField12($data['field12']);
        $createCustomerRequest->setField13($data['field13']);
        $createCustomerRequest->setField14($data['field14']);
        $createCustomerRequest->setField15($data['field15']);
        $createCustomerRequest->setSubscribeToBroadcasts($data['subscribeToBroadcasts']);
        $createCustomerRequest->setSubscribeFromIPAddress($data['subscribeFromIPAddress']);
        $createCustomerRequest->setCurrencyCode($data['currencyCode']);
        $createCustomerRequest->setPayableToName($data['payableToName']);
        $createCustomerRequest->setDefaultWarehouseID($data['defaultWarehouseID']);
        $createCustomerRequest->setCheckThreshold($data['checkThreshold']);
        $createCustomerRequest->setTaxIDTy($data['taxIDType']);
        $createCustomerRequest->setLanguageID($data['languageID']);
        $createCustomerRequest->setGender($data['gender']);
        $createCustomerRequest->setVatRegistration($data['vatRegistration']);
        $createCustomerRequest->setDate1($data['date1']);
        $createCustomerRequest->setDate2($data['date2']);
        $createCustomerRequest->setDate3($data['date3']);
        $createCustomerRequest->setDate4($data['date4']);
        $createCustomerRequest->setDate5($data['date5']);
        $createCustomerRequest->setMiddleName($data['middleName']);
        $createCustomerRequest->setNameSuffix($data['nameSuffix']);
        $createCustomerRequest->setBinaryPlacementPreference($data['binaryPlacementPreference']);
        $createCustomerRequest->setUseBinaryHoldingTank($data['useBinaryHoldingTank']);
        $createCustomerRequest->setMainAddressVerified($data['mainAddressVerified']);
        $createCustomerRequest->setMailAddressVerified($data['mailAddressVerified']);
        $createCustomerRequest->setOtherAddressVerified($data['otherAddressVerified']);
        $createCustomerRequest->setPayableTy($data['payableTy']);

        $this->assertIsArray($createCustomerRequest->toArray());
    }


    /**
     * @test
     */
    public function it_should_update_a_customer(){

        $faker = Faker\Factory::create();
        $createCustomerRequest = new CreateCustomer();
        $createCustomerRequest->setFirstName($faker->firstName());
        $createCustomerRequest->setLastName($faker->lastName());
        $createCustomerRequest->setEmail($faker->email());
        $createCustomerRequest->setCustomerType(1);
        $createCustomerRequest->setDate1((new DateTime)->format("Y-m-d H:i:s"));
        
        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);        
        
        $response = $exigoClient->createCustomer($createCustomerRequest);

        $updateCustomerRequest = new UpdateCustomer();
        $updateCustomerRequest->setCustomerID($response->data->customerID);
        $updateCustomerRequest->setLastName("Wick");
        $updateResponse = $exigoClient->updateCustomer($updateCustomerRequest);
        
        $this->assertTrue($updateResponse->success);

    }



}
