<?php


use PHPUnit\Framework\TestCase;

use Thiio\Exigo\Requests\Items\GetItems;

use Thiio\Exigo\Http\ExigoApi;


#vendor/bin/phpunit tests/GetItemsTest.php
class GetItemsTest extends TestCase
{


     /**
     * @test
     */
    public function it_should_create_a_get_items_instance(): void{

        $getItems = new GetItems();
        
        $this->assertInstanceOf(GetItems::class, $getItems);

    }

    /**
    * @test
    */
    public function it_should_set_values_to_get_items(): void{

        $getItemsReq = new GetItems();
        $getItemsReq->setCurrencyCode('USD');
        $getItemsReq->setPriceType(12);
        $getItemsReq->setWarehouseID(1);
        $getItemsReq->setItemCodes([1,2,3]);
        $getItemsReq->setWebID(3);
        $getItemsReq->setWebCategoryID(2);
        $getItemsReq->setReturnLongDetail(true);
        $getItemsReq->setRestrictToWarehouse(true);
        $getItemsReq->setLanguageID(1);
        $getItemsReq->setExcludeHideFromSearch(true);

        $this->assertEquals('USD', $getItemsReq->getCurrencyCode());
        $this->assertEquals(12, $getItemsReq->getPriceType());
        $this->assertEquals(1, $getItemsReq->getWarehouseID());
        $this->assertEquals([1,2,3], $getItemsReq->getItemCodes());
        $this->assertEquals(3, $getItemsReq->getWebID());
        $this->assertEquals(2, $getItemsReq->getWebCategoryID());
        $this->assertEquals(true, $getItemsReq->getReturnLongDetail());
        $this->assertEquals(true, $getItemsReq->getRestrictToWarehouse());
        $this->assertEquals(1, $getItemsReq->getLanguageID());
        $this->assertEquals(true, $getItemsReq->getExcludeHideFromSearch());
        

    }


    /**
    * @test
    */
    public function it_should_generate_array_representation(){
        
        $getItemsReq = new GetItems();
        $getItemsReq->setCurrencyCode('USD');
        $getItemsReq->setPriceType(12);
        $getItemsReq->setWarehouseID(1);
        $getItemsReq->setItemCodes([1,2,3]);
        $getItemsReq->setWebID(3);
        $getItemsReq->setWebCategoryID(2);
        $getItemsReq->setReturnLongDetail(true);
        $getItemsReq->setRestrictToWarehouse(true);
        $getItemsReq->setLanguageID(1);
        $getItemsReq->setExcludeHideFromSearch(true);

        $array = $getItemsReq->toArray();

        $this->assertEquals($array['currencyCode'], $getItemsReq->getCurrencyCode());
        $this->assertEquals($array['priceType'], $getItemsReq->getPriceType());
        $this->assertEquals($array['warehouseID'], $getItemsReq->getWarehouseID());
        $this->assertEquals($array['itemCodes'], $getItemsReq->getItemCodes());
        $this->assertEquals($array['webID'], $getItemsReq->getWebID());
        $this->assertEquals($array['webCategoryID'], $getItemsReq->getWebCategoryID());
        $this->assertEquals($array['returnLongDetail'], $getItemsReq->getReturnLongDetail());
        $this->assertEquals($array['restrictToWarehouse'], $getItemsReq->getRestrictToWarehouse());
        $this->assertEquals($array['languageID'], $getItemsReq->getLanguageID());
        $this->assertEquals($array['excludeHideFromSearch'], $getItemsReq->getExcludeHideFromSearch());

    }

    /**
    * @test
    */
    public function it_should_generate_query_params(){
        
        
        $getItemsReq = new GetItems();
        $getItemsReq->setCurrencyCode('USD');
        $getItemsReq->setPriceType(12);
        $getItemsReq->setWarehouseID(1);
        $getItemsReq->setItemCodes([1,2,3]);
        $getItemsReq->setWebID(3);
        $getItemsReq->setWebCategoryID(2);
        $getItemsReq->setReturnLongDetail(true);
        $getItemsReq->setRestrictToWarehouse(true);
        $getItemsReq->setLanguageID(1);
        $getItemsReq->setExcludeHideFromSearch(true);

       $string = "?".http_build_query($getItemsReq->toArray());

       $this->assertEquals($string, $getItemsReq->convertAttributesToQueryParams());

    }


    /**
    * @test
    */
    public function it_should_get_items_from_exigo(){
        
        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        $getItemsReq = new GetItems();
        $getItemsReq->setWarehouseID(1);
        $getItemsReq->setItemCodes(["TK-ENG-28-US","SUPTBR-BT-US","LNGRNS-BG-US"]);
        $getItemsReq->setCurrencyCode("usd");
        $getItemsReq->setPriceType(1);
        $response = $exigoClient->getItems($getItemsReq);
        
        $this->assertTrue($response->success);
        $this->assertIsArray($response->data->items);
        

    }


    /**
    * @test
    */
    public function it_should_get_a_failed_response(){
        
        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        $getItemsReq = new GetItems();
        $getItemsReq->setWarehouseID(1);
        $response = $exigoClient->getItems($getItemsReq);
        
        $this->assertFalse($response->success);
        $this->assertNotEmpty($response->msg);
        

    }

}
