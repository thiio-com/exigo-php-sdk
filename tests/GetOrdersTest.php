<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\CreateCustomer;
use Thiio\Exigo\Requests\CreateOrder;
use Thiio\Exigo\Requests\GetOrders;
use Thiio\Exigo\Requests\OrderDetail;

class GetOrdersTest extends TestCase
{

    const USER      = "dev_api_thiio";
    const PASSWORD  = "&Dh92^KUruF!Zq";
    const COMPANY   = "Yoli";

    public $newOrder;

   
    // private function createOrder(){
        
    //     $faker = Faker\Factory::create();
        
    //     $createOrderRequest = new CreateOrder();
        
    //     //Adding order details
    //     $orderDetail = new OrderDetail();
    //     $orderDetail->setItemCode("DY-BN-50215-US");
    //     $orderDetail->setQuantity(2);
        
    //     $orderDetail2 = new OrderDetail();
    //     $orderDetail2->setItemCode("DY-BN-50211-US");
    //     $orderDetail2->setQuantity(1);
        
    //     $createOrderRequest->setDetails([$orderDetail, $orderDetail2]);
        
    //     //Order Data
    //     $createOrderRequest->setOrderDate((new DateTime)->format('Y-m-d\TH:i:sP'));
    //     $createOrderRequest->setWarehouseID(1);
    //     $createOrderRequest->setShipMethodID(6);
    //     $createOrderRequest->setCurrencyCode("usd");
    //     $createOrderRequest->setPriceType(1);
    //     //$createOrderRequest->setCustomerKey(uniqid()); //Non Alphanumeric enabled
        
    //     //Customer Data
    //     $id = uniqid();
    //     $customer = $customerResponse->data;
    //     $createOrderRequest->setCustomerID($customer->customerID);
    //     $createOrderRequest->setFirstName($faker->firstName());
    //     $createOrderRequest->setLastName($faker->lastName());
    //     $createOrderRequest->setEmail("fernando+{$id}@thiio.com");

    //     //Address Data
    //     $createOrderRequest->setAddress1("11801 stonehollow drive");
    //     $createOrderRequest->setCountry("US");
    //     $createOrderRequest->setState("TX");
    //     $createOrderRequest->setZip("78758");
    //     $createOrderRequest->setPhone($faker->phoneNumber());
        

    //     $client = new ExigoApi(self::USER,self::PASSWORD,self::COMPANY);

    //     $response = $client->createOrder($createOrderRequest);

    //     return $response->data;
    // }
    
   

    /**
     * @test
     */
    public function it_should_return_an_instace_of_get_orders(){
        
        $getOrdersRequest = new GetOrders();
        
        $this->assertInstanceOf(GetOrders::class, $getOrdersRequest);

    }

    private function getOrderBlueprint(){
        
        return [
            "customerID"             => 1,
            "orderID"                => 2,
            "orderIDs"               => [1,2,3],
            "orderDateStart"         => (new DateTime)->format('Y-m-d\TH:i:sP'),
            "orderDateEnd"           => (new DateTime)->format('Y-m-d\TH:i:sP'),
            "orderStatus"            => "default",
            "otherOrderStatuses"     => ["default"],
            "warehouseID"            => 1,
            "currencyCode"           => "usd",
            "returnCustomer"         => false,
            "returnKitDetails"       => false,
            "greaterThanOrderID"     => 3,
            "greaterThanModifiedDate"=> (new DateTime)->format('Y-m-d\TH:i:sP'),
            "batchSize"              => 12,
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
            "partyID"                => 1,
            "customerKey"            => "default",
            "orderKey"               => "default",
            "orderKeys"              => ["default"],
            "orderSubStatusTy"       => 2,
            "batchID"                => 2,
            "orderTys"               => ["default"],
        ];

    }


    /**
     * @test
     */
    public function it_should_fill_the_get_orders_request(){

        $data = $this->getOrderBlueprint();
        
        $getOrdersRequest = new GetOrders();
        
        $getOrdersRequest->setcustomerID($data['customerID']);
        $getOrdersRequest->setorderID($data['orderID']);
        $getOrdersRequest->setorderIDs($data['orderIDs']);
        $getOrdersRequest->setorderDateStart($data['orderDateStart']);
        $getOrdersRequest->setorderDateEnd($data['orderDateEnd']);
        $getOrdersRequest->setorderStatus($data['orderStatus']);
        $getOrdersRequest->setotherOrderStatuses($data['otherOrderStatuses']);
        $getOrdersRequest->setwarehouseID($data['warehouseID']);
        $getOrdersRequest->setcurrencyCode($data['currencyCode']);
        $getOrdersRequest->setreturnCustomer($data['returnCustomer']);
        $getOrdersRequest->setreturnKitDetails($data['returnKitDetails']);
        $getOrdersRequest->setgreaterThanOrderID($data['greaterThanOrderID']);
        $getOrdersRequest->setgreaterThanModifiedDate($data['greaterThanModifiedDate']);
        $getOrdersRequest->setbatchSize($data['batchSize']);
        $getOrdersRequest->setother11($data['other11']);
        $getOrdersRequest->setother12($data['other12']);
        $getOrdersRequest->setother13($data['other13']);
        $getOrdersRequest->setother14($data['other14']);
        $getOrdersRequest->setother15($data['other15']);
        $getOrdersRequest->setother16($data['other16']);
        $getOrdersRequest->setother17($data['other17']);
        $getOrdersRequest->setother18($data['other18']);
        $getOrdersRequest->setother19($data['other19']);
        $getOrdersRequest->setother20($data['other20']);
        $getOrdersRequest->setpartyID($data['partyID']);
        $getOrdersRequest->setcustomerKey($data['customerKey']);
        $getOrdersRequest->setorderKey($data['orderKey']);
        $getOrdersRequest->setorderKeys($data['orderKeys']);
        $getOrdersRequest->setorderSubStatusTy($data['orderSubStatusTy']);
        $getOrdersRequest->setbatchID($data['batchID']);
        $getOrdersRequest->setorderTys($data['orderTys']);


        $this->assertEquals($data['customerID'], $getOrdersRequest->getcustomerID());
        $this->assertEquals($data['orderID'], $getOrdersRequest->getorderID());
        $this->assertEquals($data['orderIDs'], $getOrdersRequest->getorderIDs());
        $this->assertEquals($data['orderDateStart'], $getOrdersRequest->getorderDateStart());
        $this->assertEquals($data['orderDateEnd'], $getOrdersRequest->getorderDateEnd());
        $this->assertEquals($data['orderStatus'], $getOrdersRequest->getorderStatus());
        $this->assertEquals($data['otherOrderStatuses'], $getOrdersRequest->getotherOrderStatuses());
        $this->assertEquals($data['warehouseID'], $getOrdersRequest->getwarehouseID());
        $this->assertEquals($data['currencyCode'], $getOrdersRequest->getcurrencyCode());
        $this->assertEquals($data['returnCustomer'], $getOrdersRequest->getreturnCustomer());
        $this->assertEquals($data['returnKitDetails'], $getOrdersRequest->getreturnKitDetails());
        $this->assertEquals($data['greaterThanOrderID'], $getOrdersRequest->getgreaterThanOrderID());
        $this->assertEquals($data['greaterThanModifiedDate'], $getOrdersRequest->getgreaterThanModifiedDate());
        $this->assertEquals($data['batchSize'], $getOrdersRequest->getbatchSize());
        $this->assertEquals($data['other11'], $getOrdersRequest->getother11());
        $this->assertEquals($data['other12'], $getOrdersRequest->getother12());
        $this->assertEquals($data['other13'], $getOrdersRequest->getother13());
        $this->assertEquals($data['other14'], $getOrdersRequest->getother14());
        $this->assertEquals($data['other15'], $getOrdersRequest->getother15());
        $this->assertEquals($data['other16'], $getOrdersRequest->getother16());
        $this->assertEquals($data['other17'], $getOrdersRequest->getother17());
        $this->assertEquals($data['other18'], $getOrdersRequest->getother18());
        $this->assertEquals($data['other19'], $getOrdersRequest->getother19());
        $this->assertEquals($data['other20'], $getOrdersRequest->getother20());
        $this->assertEquals($data['partyID'], $getOrdersRequest->getpartyID());
        $this->assertEquals($data['customerKey'], $getOrdersRequest->getcustomerKey());
        $this->assertEquals($data['orderKey'], $getOrdersRequest->getorderKey());
        $this->assertEquals($data['orderKeys'], $getOrdersRequest->getorderKeys());
        $this->assertEquals($data['orderSubStatusTy'], $getOrdersRequest->getorderSubStatusTy());
        $this->assertEquals($data['batchID'], $getOrdersRequest->getbatchID());
        $this->assertEquals($data['orderTys'], $getOrdersRequest->getorderTys());

    }

}