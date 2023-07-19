<?php

use Thiio\Exigo\Http\ExigoApi;
use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\OrdersPayments\OrderDetail;
use Thiio\Exigo\Requests\OrdersPayments\CalculateOrder;

#vendor/bin/phpunit tests/CalculateOrderTest.php
class CalculateOrderTest extends TestCase
{


    const USER      = "dev_api_thiio";
    const PASSWORD  = "&Dh92^KUruF!Zq";
    const COMPANY   = "Yoli";


   //  const USER      = "prod_api_thiio";
   //  const PASSWORD  = "84Ny#&I4IC77";
   //  const COMPANY   = "Yoli";


     /**
     * @test
     */
    public function it_should_create_a_calculate_order_instance(): void{

        $calculateOrder = new CalculateOrder();
        
        $this->assertInstanceOf(CalculateOrder::class, $calculateOrder);

    }


    private function getOrderBlueprint(){
        $faker = Faker\Factory::create();
        
        return[
            "currencyCode"           => "USD",
            "warehouseID"            => 1,
            "shipMethodID"           => 1,
            "priceType"              => 1,
            "address1"               => $faker->streetAddress(),
            "address2"               => "apt 1",
            "address3"               => "address3",
            "city"                   => $faker->city(),
            "state"                  => $faker->state(),
            "zip"                    => $faker->postcode(),
            "country"                => $faker->country(),
            "county"                 => "",
            "customerID"             => 1,
            "taxRateOverride"        => 1,
            "shippingAmountOverride" => 10,
            "returnOrderID"          => 1,
            "other11"                => "other11",
            "other12"                => "other12",
            "other13"                => "other13",
            "other14"                => "other14",
            "other15"                => "other15",
            "other16"                => "other16",
            "other17"                => "other17",
            "other18"                => "other18",
            "other19"                => "other19",
            "other20"                => "other20",
            "details"                => ["These are demo details"],
            "returnShipMethods"      => false,
            "partyID"                => 1,
            "returnTrace"            => false,
            "customerKey"            => 1,
            "returnOrder"            => "demo",
            "orderID"                => 0,
            "orderType"              => "DEFAULT",
            "orderSubStatusTy"       => 1,
        ];
    }

    /**
     * @test
     */

     public function it_should_fill_a_calculate_order(){
        
        $data = $this->getOrderBlueprint();
        
        $calculateOrder = new CalculateOrder();
        
        $calculateOrder->setCurrencyCode($data['currencyCode']);
        $calculateOrder->setWarehouseID($data['warehouseID']);
        $calculateOrder->setShipMethodID($data['shipMethodID']);
        $calculateOrder->setPriceType($data['priceType']);
        $calculateOrder->setAddress1($data['address1']);
        $calculateOrder->setAddress2($data['address2']);
        $calculateOrder->setAddress3($data['address3']);
        $calculateOrder->setCity($data['city']);
        $calculateOrder->setState($data['state']);
        $calculateOrder->setZip($data['zip']);
        $calculateOrder->setCountry($data['country']);
        $calculateOrder->setCounty($data['county']);
        $calculateOrder->setCustomerID($data['customerID']);
        $calculateOrder->setTaxRateOverride($data['taxRateOverride']);
        $calculateOrder->setShippingAmountOverride($data['shippingAmountOverride']);
        $calculateOrder->setReturnOrderID($data['returnOrderID']);
        $calculateOrder->setOther11($data['other11']);
        $calculateOrder->setOther12($data['other12']);
        $calculateOrder->setOther13($data['other13']);
        $calculateOrder->setOther14($data['other14']);
        $calculateOrder->setOther15($data['other15']);
        $calculateOrder->setOther16($data['other16']);
        $calculateOrder->setOther17($data['other17']);
        $calculateOrder->setOther18($data['other18']);
        $calculateOrder->setOther19($data['other19']);
        $calculateOrder->setOther20($data['other20']);
        $calculateOrder->setDetails($data['details']);
        $calculateOrder->setReturnShipMethods($data['returnShipMethods']);
        $calculateOrder->setPartyID($data['partyID']);
        $calculateOrder->setReturnTrace($data['returnTrace']);
        $calculateOrder->setCustomerKey($data['customerKey']);
        $calculateOrder->setReturnOrder($data['returnOrder']);
        $calculateOrder->setOrderID($data['orderID']);
        $calculateOrder->setOrderType($data['orderType']);
        $calculateOrder->setOrderSubStatusTy($data['orderSubStatusTy']);
        

        $this->assertEquals($data['currencyCode'],$calculateOrder->getCurrencyCode());
        $this->assertEquals($data['warehouseID'],$calculateOrder->getWarehouseID());
        $this->assertEquals($data['shipMethodID'], $calculateOrder->getShipMethodID());
        $this->assertEquals($data['priceType'], $calculateOrder->getPriceType());
        $this->assertEquals($data['address1'], $calculateOrder->getAddress1());
        $this->assertEquals($data['address2'], $calculateOrder->getAddress2());
        $this->assertEquals($data['address3'], $calculateOrder->getAddress3());
        $this->assertEquals($data['city'], $calculateOrder->getCity());
        $this->assertEquals($data['state'], $calculateOrder->getState());
        $this->assertEquals($data['zip'], $calculateOrder->getZip());
        $this->assertEquals($data['country'], $calculateOrder->getCountry());
        $this->assertEquals($data['county'], $calculateOrder->getCounty());
        $this->assertEquals($data['customerID'], $calculateOrder->getCustomerID());
        $this->assertEquals($data['taxRateOverride'], $calculateOrder->getTaxRateOverride());
        $this->assertEquals($data['shippingAmountOverride'], $calculateOrder->getShippingAmountOverride());
        $this->assertEquals($data['returnOrderID'], $calculateOrder->getReturnOrderID());
        $this->assertEquals($data['other11'],$calculateOrder->getOther11());
        $this->assertEquals($data['other12'],$calculateOrder->getOther12());
        $this->assertEquals($data['other13'],$calculateOrder->getOther13());
        $this->assertEquals($data['other14'],$calculateOrder->getOther14());
        $this->assertEquals($data['other15'],$calculateOrder->getOther15());
        $this->assertEquals($data['other16'],$calculateOrder->getOther16());
        $this->assertEquals($data['other17'],$calculateOrder->getOther17());
        $this->assertEquals($data['other18'],$calculateOrder->getOther18());
        $this->assertEquals($data['other19'],$calculateOrder->getOther19());
        $this->assertEquals($data['other20'],$calculateOrder->getOther20());
        $this->assertEquals($data['details'],$calculateOrder->getDetails());
        $this->assertEquals($data['returnShipMethods'],$calculateOrder->getReturnShipMethods());
        $this->assertEquals($data['partyID'],$calculateOrder->getPartyID());
        $this->assertEquals($data['returnTrace'],$calculateOrder->getReturnTrace());
        $this->assertEquals($data['customerKey'],$calculateOrder->getCustomerKey());
        $this->assertEquals($data['returnOrder'],$calculateOrder->getReturnOrder());
        $this->assertEquals($data['orderID'],$calculateOrder->getOrderID());
        $this->assertEquals($data['orderType'],$calculateOrder->getOrderType());
        $this->assertEquals($data['orderSubStatusTy'],$calculateOrder->getOrderSubStatusTy());

    }

    /**
     * @test
     */

     public function it_should_calculate_an_order(){

        $orderDetail = new OrderDetail();
        $orderDetail->setItemCode("DY-BN-50215-US");
        $orderDetail->setQuantity(2);

        $orderDetail2 = new OrderDetail();
        $orderDetail2->setItemCode("DY-BN-50211-US");
        $orderDetail2->setQuantity(1);

        $calculateOrderRequest = new CalculateOrder();
        $calculateOrderRequest->setCurrencyCode("usd");
        $calculateOrderRequest->setWarehouseID(1);
        $calculateOrderRequest->setShipMethodID(6);//UPS Next Day	
        $calculateOrderRequest->setPriceType(1);
      //   $calculateOrderRequest->setAddress1("11801 stonehollow drive");
      //   $calculateOrderRequest->setAddress2("");
      //   $calculateOrderRequest->setAddress3("");
      //   $calculateOrderRequest->setCity("Austin");
        $calculateOrderRequest->setState("TX");//Required
      //   $calculateOrderRequest->setZip("78758");
        $calculateOrderRequest->setCountry("US");//Required
      //   $calculateOrderRequest->setCounty("");
        $calculateOrderRequest->setDetails([$orderDetail->toArray(), $orderDetail2->toArray()]);
        
        $exigoClient           = new ExigoApi(self::USER,self::PASSWORD,self::COMPANY,'SANDBOX');

        $response = $exigoClient->calculateOrder($calculateOrderRequest);
        
        
        $this->assertTrue($response->success);
        $this->assertIsObject($response->data);

     }


}
