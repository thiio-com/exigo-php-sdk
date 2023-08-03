<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\Customers\CreateCustomer;
use Thiio\Exigo\Requests\Customers\GetCustomers;

#vendor/bin/phpunit tests/GetCustomersTest.php
class GetCustomersTest extends TestCase
{

    
    /**
     * @test
     */
    public function it_should_create_a_get_customers_instance(){
        
        $getCustomersRequest = new GetCustomers();
        
        $this->assertInstanceOf(GetCustomers::class, $getCustomersRequest);

    }

    private function createCustomer(){
        $faker = Faker\Factory::create();
        $createCustomerRequest = new CreateCustomer();
        $createCustomerRequest->setFirstName($faker->firstName());
        $createCustomerRequest->setLastName($faker->lastName());
        $createCustomerRequest->setEmail($faker->email());
        $createCustomerRequest->setCustomerType(1);
        $createCustomerRequest->setDate1((new DateTime)->format('Y-m-d\TH:i:sP'));
        $createCustomerRequest->setBirthDate((new DateTime)->format('Y-m-d\TH:i:sP'));
        
        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        
        $response = $exigoClient->createCustomer($createCustomerRequest);

        return $response->data;
    }

    /**
     * @test
     */
    public function it_should_fetch_a_customer_by_id(){
        
        $customer = $this->createCustomer();

        $getCustomersRequest = new GetCustomers();
        $getCustomersRequest->setCustomerID($customer->customerID);

        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        
        $response = $exigoClient->getCustomers($getCustomersRequest);
        
        $this->assertTrue($response->success);
        $this->assertIsArray($response->data->customers);

    }


    /**
     * @test
     */
    public function it_should_fetch_a_customer_by_email(){
        
        $faker = Faker\Factory::create();
        $createCustomerRequest = new CreateCustomer();
        $createCustomerRequest->setFirstName($faker->firstName());
        $createCustomerRequest->setLastName($faker->lastName());
        $createCustomerRequest->setEmail($faker->email());
        $createCustomerRequest->setCustomerType(1);
        $createCustomerRequest->setDate1((new DateTime)->format('Y-m-d\TH:i:sP'));
        $createCustomerRequest->setBirthDate((new DateTime)->format('Y-m-d\TH:i:sP'));
        
        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        
        $exigoClient->createCustomer($createCustomerRequest);
        
        $getCustomersRequest = new GetCustomers();
        
        $getCustomersRequest->setEmail($createCustomerRequest->getEmail());

        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        
        $response = $exigoClient->getCustomers($getCustomersRequest);
        
        $this->assertTrue($response->success);
        $this->assertIsArray($response->data->customers);
        $this->assertEquals($response->data->customers[0]->email, $createCustomerRequest->getEmail());


    }



}
