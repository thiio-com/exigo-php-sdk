<?php

use Thiio\Exigo\Http\ExigoApi;
use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\Customers\GetCustomerSite;

use function GuzzleHttp\json_decode;

#vendor/bin/phpunit tests/GetCustomerSiteTest.php
class GetCustomerSiteTest extends TestCase
{


    /**
     * @test
     */
    public function it_should_create_a_get_customer_site_instance_test(){

        $getCustomerSiteRequest = new GetCustomerSite();

        $this->assertInstanceOf(GetCustomerSite::class, $getCustomerSiteRequest);

    }


    /**
     * @test
     */
    public function it_should_fill_a_get_customer_site_instance_test(){

        $data = [
            "webalias"    => "50",
            "customerID"  => "400",
            "customerKey" => "demo_customer_key"
        ];

        $getCustomerSiteRequest = new GetCustomerSite();

        $getCustomerSiteRequest->setWebAlias($data["webalias"]);
        $getCustomerSiteRequest->setCustomerID($data["customerID"]);
        $getCustomerSiteRequest->setCustomerKey($data["customerKey"]);

        $this->assertEquals($getCustomerSiteRequest->getWebAlias(),$data["webalias"]);
        $this->assertEquals($getCustomerSiteRequest->getCustomerID(),$data["customerID"]);
        $this->assertEquals($getCustomerSiteRequest->getCustomerKey(),$data["customerKey"]);

        

    }


    /**
     * @test
     */
    public function it_should_get_a_customer_site_from_exigo(){

        
        $getCustomerSiteRequest = new GetCustomerSite();

        $getCustomerSiteRequest->setWebAlias("50");
        
        $exigoApi = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);

        $response = $exigoApi->getCustomerSite($getCustomerSiteRequest);

        $this->assertTrue($response->success);

    }


    


    
    

}
