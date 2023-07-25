<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\OrdersPayments\ChargeCreditCardToken;

#vendor/bin/phpunit tests/ChargeCreditCardTokenTest.php
class ChargeCreditCardTokenTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_charge_credit_card_instance(){

            $chargeCreditCardRequest = new ChargeCreditCardToken();

            $this->assertInstanceOf(ChargeCreditCardToken::class, $chargeCreditCardRequest);

    }


    private function getChargeCreditCardBlueprint(){
        $faker = Faker\Factory::create();
        return [
            "creditCardToken" => "47X4747X0FAD84747",
            "billingName" => $faker->name(),
            "billingAddress" => $faker->streetAddress(),
            "billingAddress2" => "",
            "billingCity" => $faker->city(),
            "billingState " => $faker->state(),
            "billingZip" => $faker->postcode(),
            "billingCountry " => $faker->country(),
            "cvcCode" => "123",
            "issueNumber" => "",
            "creditCardType " => "VISA",
            "expirationMonth" => "03",
            "expirationYear" => date('Y', strtotime('+2 years')),
            "orderID" => uniqid(),
            "maxAmount" => 2000,
            "merchantWarehouseIDOverride" => 1,
            "clientIPAddress" => $faker->ipv4(),
            "otherData1" => "otherData1",
            "otherData2" => "otherData2",
            "otherData3" => "otherData3",
            "otherData4" => "otherData4",
            "otherData5" => "otherData5",
            "otherData6" => "otherData6",
            "otherData7" => "otherData7",
            "otherData8" => "otherData8",
            "otherData9" => "otherData9",
            "otherData10" => "otherData10",
            "orderKey" => "orderkey",
        ];
    }
    

    /**
     * @test
     */
    public function it_should_fill_a_charge_credit_card_request(){
        $data = $this->getChargeCreditCardBlueprint();
        
        $chargeCreditCardRequest = new ChargeCreditCardToken();
        
        $chargeCreditCardRequest->setCreditCardToken($data["creditCardToken"]);
        $chargeCreditCardRequest->setBillingName($data["billingName"]);
        $chargeCreditCardRequest->setBillingAddress($data["billingAddress"]);
        $chargeCreditCardRequest->setBillingAddress2($data["billingAddress2"]);
        $chargeCreditCardRequest->setBillingCity($data["billingCity"]);
        $chargeCreditCardRequest->setBillingState ($data["billingState "]);
        $chargeCreditCardRequest->setBillingZip($data["billingZip"]);
        $chargeCreditCardRequest->setBillingCountry ($data["billingCountry "]);
        $chargeCreditCardRequest->setCvcCode($data["cvcCode"]);
        $chargeCreditCardRequest->setIssueNumber($data["issueNumber"]);
        $chargeCreditCardRequest->setCreditCardType ($data["creditCardType "]);
        $chargeCreditCardRequest->setExpirationMonth($data["expirationMonth"]);
        $chargeCreditCardRequest->setExpirationYear($data["expirationYear"]);
        $chargeCreditCardRequest->setOrderID($data["orderID"]);
        $chargeCreditCardRequest->setMaxAmount($data["maxAmount"]);
        $chargeCreditCardRequest->setMerchantWarehouseIDOverride($data["merchantWarehouseIDOverride"]);
        $chargeCreditCardRequest->setClientIPAddress($data["clientIPAddress"]);
        $chargeCreditCardRequest->setOtherData1($data["otherData1"]);
        $chargeCreditCardRequest->setOtherData2($data["otherData2"]);
        $chargeCreditCardRequest->setOtherData3($data["otherData3"]);
        $chargeCreditCardRequest->setOtherData4($data["otherData4"]);
        $chargeCreditCardRequest->setOtherData5($data["otherData5"]);
        $chargeCreditCardRequest->setOtherData6($data["otherData6"]);
        $chargeCreditCardRequest->setOtherData7($data["otherData7"]);
        $chargeCreditCardRequest->setOtherData8($data["otherData8"]);
        $chargeCreditCardRequest->setOtherData9($data["otherData9"]);
        $chargeCreditCardRequest->setOtherData10($data["otherData10"]);
        $chargeCreditCardRequest->setOrderKey($data["orderKey"]);


        $this->assertEquals($data["creditCardToken"], $chargeCreditCardRequest->getCreditCardToken());
        $this->assertEquals($data["billingName"], $chargeCreditCardRequest->getBillingName());
        $this->assertEquals($data["billingAddress"], $chargeCreditCardRequest->getBillingAddress());
        $this->assertEquals($data["billingAddress2"], $chargeCreditCardRequest->getBillingAddress2());
        $this->assertEquals($data["billingCity"], $chargeCreditCardRequest->getBillingCity());
        $this->assertEquals($data["billingState "], $chargeCreditCardRequest->getBillingState ());
        $this->assertEquals($data["billingZip"], $chargeCreditCardRequest->getBillingZip());
        $this->assertEquals($data["billingCountry "], $chargeCreditCardRequest->getBillingCountry ());
        $this->assertEquals($data["cvcCode"], $chargeCreditCardRequest->getCvcCode());
        $this->assertEquals($data["issueNumber"], $chargeCreditCardRequest->getIssueNumber());
        $this->assertEquals($data["creditCardType "], $chargeCreditCardRequest->getCreditCardType ());
        $this->assertEquals($data["expirationMonth"], $chargeCreditCardRequest->getExpirationMonth());
        $this->assertEquals($data["expirationYear"], $chargeCreditCardRequest->getExpirationYear());
        $this->assertEquals($data["orderID"], $chargeCreditCardRequest->getOrderID());
        $this->assertEquals($data["maxAmount"], $chargeCreditCardRequest->getMaxAmount());
        $this->assertEquals($data["merchantWarehouseIDOverride"], $chargeCreditCardRequest->getMerchantWarehouseIDOverride());
        $this->assertEquals($data["clientIPAddress"], $chargeCreditCardRequest->getClientIPAddress());
        $this->assertEquals($data["otherData1"], $chargeCreditCardRequest->getOtherData1());
        $this->assertEquals($data["otherData2"], $chargeCreditCardRequest->getOtherData2());
        $this->assertEquals($data["otherData3"], $chargeCreditCardRequest->getOtherData3());
        $this->assertEquals($data["otherData4"], $chargeCreditCardRequest->getOtherData4());
        $this->assertEquals($data["otherData5"], $chargeCreditCardRequest->getOtherData5());
        $this->assertEquals($data["otherData6"], $chargeCreditCardRequest->getOtherData6());
        $this->assertEquals($data["otherData7"], $chargeCreditCardRequest->getOtherData7());
        $this->assertEquals($data["otherData8"], $chargeCreditCardRequest->getOtherData8());
        $this->assertEquals($data["otherData9"], $chargeCreditCardRequest->getOtherData9());
        $this->assertEquals($data["otherData10"], $chargeCreditCardRequest->getOtherData10());
        $this->assertEquals($data["orderKey"], $chargeCreditCardRequest->getOrderKey());
    }

    /**
     * @test
     */
    public function it_should_decline_the_request(){

        $chargeCreditCardRequest = new ChargeCreditCardToken();
        $chargeCreditCardRequest->setCreditCardToken("47X4747X0FAD84747");
        $chargeCreditCardRequest->setBillingName("John Wick");
        $chargeCreditCardRequest->setBillingAddress("1 Main St");
        $chargeCreditCardRequest->setBillingAddress2("");
        $chargeCreditCardRequest->setBillingCity("San Jose");
        $chargeCreditCardRequest->setBillingZip("95101");
        $chargeCreditCardRequest->setExpirationMonth(3);
        $chargeCreditCardRequest->setExpirationYear(25);
        $chargeCreditCardRequest->setOrderKey("myorder-1");

        $exigoClient           = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],'SANDBOX');

        $response = $exigoClient->chargeCreditCardToken($chargeCreditCardRequest);
        
        
        $this->assertFalse($response->success);
        

    }



}
