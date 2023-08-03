<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\Items\GetWarehouses;

#vendor/bin/phpunit tests/GetWarehousesTest.php
class GetWarehousesTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_get_warehouses_instance(){
        
        $getWarehousesRequest = new GetWarehouses();
        
        $this->assertInstanceOf(GetWarehouses::class, $getWarehousesRequest);
    }


    private function getWarehousesBlueprint(){
        $faker = Faker\Factory::create();
        return  [
            "warehouseID" => 1,
            "description" => "This is a demo description",
            "address1"    => $faker->streetAddress(),
            "address2"    => $faker->streetAddress(),
            "city"        => $faker->city(),
            "state"       => $faker->state(),
            "zip"         => $faker->postcode(),
            "country"     => $faker->countryCode(),
        ];
    }


    /**
     * @test
     */
    public function it_should_fill_a_get_warehouses_request(){
        
        $data = $this->getWarehousesBlueprint();
        
        $getWarehousesRequest = new GetWarehouses();
        
        $getWarehousesRequest->setWarehouseID($data['warehouseID']);
        $getWarehousesRequest->setDescription($data['description']);
        $getWarehousesRequest->setAddress1($data['address1']);
        $getWarehousesRequest->setAddress2($data['address2']);
        $getWarehousesRequest->setCity($data['city']);
        $getWarehousesRequest->setState($data['state']);
        $getWarehousesRequest->setZip($data['zip']);
        $getWarehousesRequest->setCountry($data['country']);

        $this->assertEquals($getWarehousesRequest->getWarehouseID(), $data['warehouseID']);
        $this->assertEquals($getWarehousesRequest->getDescription(), $data['description']);
        $this->assertEquals($getWarehousesRequest->getAddress1(), $data['address1']);
        $this->assertEquals($getWarehousesRequest->getAddress2(), $data['address2']);
        $this->assertEquals($getWarehousesRequest->getCity(), $data['city']);
        $this->assertEquals($getWarehousesRequest->getState(), $data['state']);
        $this->assertEquals($getWarehousesRequest->getZip(), $data['zip']);
        $this->assertEquals($getWarehousesRequest->getCountry(), $data['country']);
        
    }


    /**
     * @test
     */
    public function it_should_fetch_warehouses_from_exigo(){
        
        
        
        $getWarehousesRequest = new GetWarehouses();
        
        $client = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);

        $response = $client->getWarehouses($getWarehousesRequest);
        
        $this->assertTrue($response->success);
        $this->assertIsArray($response->data->warehouses);
        
    }

}
