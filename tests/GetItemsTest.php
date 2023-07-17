<?php


use PHPUnit\Framework\TestCase;

use Thiio\Exigo\Requests\GetItems;

use Thiio\Exigo\Http\Client;
use Thiio\Exigo\Http\ExigoApi;



use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

#vendor/bin/phpunit tests/GetItemsTest.php
class GetItemsTest extends TestCase
{

    const USER      = "dev_api_thiio";
    const PASSWORD  = "&Dh92^KUruF!Zq";
    const COMPANY   = "Yoli";

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
       //$string = "?currencyCode=USD&priceType=12&warehouseID=1&itemCodes=[1,2,3]&webID=3&webCategoryID=2&returnLongDetail=1&restrictToWarehouse=1&languageID=1&excludeHideFromSearch=1";

       $this->assertEquals($string, $getItemsReq->convertAttributesToQueryParams());

    }


    /**
    * @test
    */
    public function it_should_get_items_from_exigo(){
        
        $exigoClient = new ExigoApi(self::USER,self::PASSWORD,self::COMPANY,'SANDBOX');
        $getItemsReq = new GetItems();
        $getItemsReq->setWarehouseID(1);
        $getItemsReq->setItemCodes(["10010-US", "10113-US", "_100_TEST", "1000010101", "10005-US", "TRUBOX-US"]);
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
        
        $exigoClient = new ExigoApi(self::USER,self::PASSWORD,self::COMPANY,'SANDBOX');
        $getItemsReq = new GetItems();
        $getItemsReq->setWarehouseID(1);
        $response = $exigoClient->getItems($getItemsReq);
        
        $this->assertFalse($response->success);
        $this->assertNotEmpty($response->msg);
        

    }



    public function log($data){
        $logger = new Logger('my_logger');
        // Now add some handlers
        $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Level::Debug));
        $logger->pushHandler(new FirePHPHandler());
        $message = json_encode($data);
        $logger->info($message);

    }

}
