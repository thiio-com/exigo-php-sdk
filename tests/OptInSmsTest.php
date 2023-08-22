<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\Communications\OptInSms;

#vendor/bin/phpunit tests/OptInSmsTest.php
class OptInSmsTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_get_warehouses_instance(){
        
        $optInSmsRequest = new OptInSms();
        
        $this->assertInstanceOf(OptInSms::class, $optInSmsRequest);
    }


    private function getBlueprint(){
        $faker = Faker\Factory::create();
        return  [
            "customerID" => 1,
            "phoneNumber" => "+15122657979",
            "customerKey"    => "demo_customer_key",
            
        ];
    }


    /**
     * @test
     */
    public function it_should_fill_an_optinsms_request(){
        
        $data = $this->getBlueprint();
        
        $optInSmsRequest = new OptInSms();
        
        $optInSmsRequest->setCustomerID($data['customerID']);
        $optInSmsRequest->setPhoneNumber($data['phoneNumber']);
        $optInSmsRequest->setCustomerKey($data['customerKey']);
        
        $this->assertEquals($optInSmsRequest->getCustomerID(), $data['customerID']);
        $this->assertEquals($optInSmsRequest->getCustomerKey(), $data['customerKey']);
        $this->assertEquals($optInSmsRequest->getPhoneNumber(), $data['phoneNumber']);
        
    }


    /**
     * @test
     */
    public function it_should_optinsms_from_exigo(){
        
        
        
        $optInSmsRequest = new OptInSms();
        
        $client = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);

        $response = $client->optInSms($optInSmsRequest);

        $this->assertFalse($response->success);
        
        
    }

}
