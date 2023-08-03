<?php

use Thiio\Exigo\Http\ExigoApi;
use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\OrdersPayments\OrderDetail;
use Thiio\Exigo\Requests\Customers\CreateCustomer;
use Thiio\Exigo\Requests\OrdersPayments\CreateOrder;

#vendor/bin/phpunit tests/CreateOrderTest.php
class CreateOrderTest extends TestCase
{


    /**
     * @test
     */
    public function it_should_create_a_create_order_instance(){

        $createOrderRequest = new CreateOrder();

        $this->assertInstanceOf(CreateOrder::class, $createOrderRequest);

    }


    private function getOrderBlueprint(){
        
        $orderDetail = new OrderDetail();
        $orderDetail->setItemCode("DY-BN-50215-US");
        $orderDetail->setQuantity(2);

        $orderDetail2 = new OrderDetail();
        $orderDetail2->setItemCode("DY-BN-50211-US");
        $orderDetail2->setQuantity(1);
        
        $faker = Faker\Factory::create();
        return [
            "customerID"             => 1,
            "orderStatus"            => "default",
            "orderDate"              => (new DateTime)->format('Y-m-d\TH:i:sP'),
            "currencyCode"           => "usd",
            "warehouseID"            => 1,
            "shipMethodID"           => 6,
            "priceType"              => 1,
            "firstName"              => $faker->firstName(),
            "middleName"             => $faker->firstName(),
            "lastName"               => $faker->lastName(),
            "nameSuffix"             => $faker->title(),
            "company"                => $faker->company(),
            "address1"               => $faker->streetAddress(),
            "address2"               => "",
            "address3"               => "",
            "city"                   => $faker->city(),
            "state"                  => $faker->state(),
            "zip"                    => $faker->postcode(),
            "country"                => $faker->countryCode(),
            "county"                 => "",
            "email"                  => $faker->email(),
            "phone"                  => $faker->phoneNumber(),
            "notes"                  => "This is a demo note",
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
            "orderType"              => "default",
            "taxRateOverride"        => 2.0,
            "shippingAmountOverride" => 5.0,
            "useManualOrderID"       => 1,
            "manualOrderID"          => 1,
            "transferVolumeToID"     => 1,
            "returnOrderID"          => 1,
            "overwriteExistingOrder" => false,
            "existingOrderID"        => 1,
            "partyID"                => 1,
            "details"                => [$orderDetail, $orderDetail2],
            "suppressPackSlipPrice"  => false,
            "transferVolumeToKey"    => "demo",
            "returnOrderKey"         => "demo",
            "manualOrderKey"         => "default",
            "existingOrderKey"       => "default",
            "customerKey"            => "default",
            "orderSubStatusTy"       => 1,
        ];

    }


    /**
     * @test
     */
    public function it_should_fill_a_create_order_request(){
        
        $data = $this->getOrderBlueprint();
        $createOrderRequest = new CreateOrder();
        
        $createOrderRequest->setCustomerID($data['customerID']);
        $createOrderRequest->setOrderStatus($data['orderStatus']);
        $createOrderRequest->setOrderDate($data['orderDate']);
        $createOrderRequest->setCurrencyCode($data['currencyCode']);
        $createOrderRequest->setWarehouseID($data['warehouseID']);
        $createOrderRequest->setShipMethodID($data['shipMethodID']);
        $createOrderRequest->setPriceType($data['priceType']);
        $createOrderRequest->setFirstName($data['firstName']);
        $createOrderRequest->setMiddleName($data['middleName']);
        $createOrderRequest->setLastName($data['lastName']);
        $createOrderRequest->setNameSuffix($data['nameSuffix']);
        $createOrderRequest->setCompany($data['company']);
        $createOrderRequest->setAddress1($data['address1']);
        $createOrderRequest->setAddress2($data['address2']);
        $createOrderRequest->setAddress3($data['address3']);
        $createOrderRequest->setCity($data['city']);
        $createOrderRequest->setState($data['state']);
        $createOrderRequest->setZip($data['zip']);
        $createOrderRequest->setCountry($data['country']);
        $createOrderRequest->setCounty($data['county']);
        $createOrderRequest->setEmail($data['email']);
        $createOrderRequest->setPhone($data['phone']);
        $createOrderRequest->setNotes($data['notes']);
        $createOrderRequest->setOther11($data['other11']);
        $createOrderRequest->setOther12($data['other12']);
        $createOrderRequest->setOther13($data['other13']);
        $createOrderRequest->setOther14($data['other14']);
        $createOrderRequest->setOther15($data['other15']);
        $createOrderRequest->setOther16($data['other16']);
        $createOrderRequest->setOther17($data['other17']);
        $createOrderRequest->setOther18($data['other18']);
        $createOrderRequest->setOther19($data['other19']);
        $createOrderRequest->setOther20($data['other20']);
        $createOrderRequest->setOrderType($data['orderType']);
        $createOrderRequest->setTaxRateOverride($data['taxRateOverride']);
        $createOrderRequest->setShippingAmountOverride($data['shippingAmountOverride']);
        $createOrderRequest->setUseManualOrderID($data['useManualOrderID']);
        $createOrderRequest->setManualOrderID($data['manualOrderID']);
        $createOrderRequest->setTransferVolumeToID($data['transferVolumeToID']);
        $createOrderRequest->setReturnOrderID($data['returnOrderID']);
        $createOrderRequest->setOverwriteExistingOrder($data['overwriteExistingOrder']);
        $createOrderRequest->setExistingOrderID($data['existingOrderID']);
        $createOrderRequest->setPartyID($data['partyID']);
        $createOrderRequest->setDetails($data['details']);
        $createOrderRequest->setSuppressPackSlipPrice($data['suppressPackSlipPrice']);
        $createOrderRequest->setTransferVolumeToKey($data['transferVolumeToKey']);
        $createOrderRequest->setReturnOrderKey($data['returnOrderKey']);
        $createOrderRequest->setManualOrderKey($data['manualOrderKey']);
        $createOrderRequest->setExistingOrderKey($data['existingOrderKey']);
        $createOrderRequest->setCustomerKey($data['customerKey']);
        $createOrderRequest->setOrderSubStatusTy($data['orderSubStatusTy']);


        $this->assertEquals($data['customerID'],$createOrderRequest->getCustomerID());
        $this->assertEquals($data['orderStatus'],$createOrderRequest->getOrderStatus());
        $this->assertEquals($data['orderDate'],$createOrderRequest->getOrderDate());
        $this->assertEquals($data['currencyCode'],$createOrderRequest->getCurrencyCode());
        $this->assertEquals($data['warehouseID'],$createOrderRequest->getWarehouseID());
        $this->assertEquals($data['shipMethodID'],$createOrderRequest->getShipMethodID());
        $this->assertEquals($data['priceType'],$createOrderRequest->getPriceType());
        $this->assertEquals($data['firstName'],$createOrderRequest->getFirstName());
        $this->assertEquals($data['middleName'],$createOrderRequest->getMiddleName());
        $this->assertEquals($data['lastName'],$createOrderRequest->getLastName());
        $this->assertEquals($data['nameSuffix'],$createOrderRequest->getNameSuffix());
        $this->assertEquals($data['company'],$createOrderRequest->getCompany());
        $this->assertEquals($data['address1'],$createOrderRequest->getAddress1());
        $this->assertEquals($data['address2'],$createOrderRequest->getAddress2());
        $this->assertEquals($data['address3'],$createOrderRequest->getAddress3());
        $this->assertEquals($data['city'],$createOrderRequest->getCity());
        $this->assertEquals($data['state'],$createOrderRequest->getState());
        $this->assertEquals($data['zip'],$createOrderRequest->getZip());
        $this->assertEquals($data['country'],$createOrderRequest->getCountry());
        $this->assertEquals($data['county'],$createOrderRequest->getCounty());
        $this->assertEquals($data['email'],$createOrderRequest->getEmail());
        $this->assertEquals($data['phone'],$createOrderRequest->getPhone());
        $this->assertEquals($data['notes'],$createOrderRequest->getNotes());
        $this->assertEquals($data['other11'],$createOrderRequest->getOther11());
        $this->assertEquals($data['other12'],$createOrderRequest->getOther12());
        $this->assertEquals($data['other13'],$createOrderRequest->getOther13());
        $this->assertEquals($data['other14'],$createOrderRequest->getOther14());
        $this->assertEquals($data['other15'],$createOrderRequest->getOther15());
        $this->assertEquals($data['other16'],$createOrderRequest->getOther16());
        $this->assertEquals($data['other17'],$createOrderRequest->getOther17());
        $this->assertEquals($data['other18'],$createOrderRequest->getOther18());
        $this->assertEquals($data['other19'],$createOrderRequest->getOther19());
        $this->assertEquals($data['other20'],$createOrderRequest->getOther20());
        $this->assertEquals($data['orderType'],$createOrderRequest->getOrderType());
        $this->assertEquals($data['taxRateOverride'],$createOrderRequest->getTaxRateOverride());
        $this->assertEquals($data['shippingAmountOverride'],$createOrderRequest->getShippingAmountOverride());
        $this->assertEquals($data['useManualOrderID'],$createOrderRequest->getUseManualOrderID());
        $this->assertEquals($data['manualOrderID'],$createOrderRequest->getManualOrderID());
        $this->assertEquals($data['transferVolumeToID'],$createOrderRequest->getTransferVolumeToID());
        $this->assertEquals($data['returnOrderID'],$createOrderRequest->getReturnOrderID());
        $this->assertEquals($data['overwriteExistingOrder'],$createOrderRequest->getOverwriteExistingOrder());
        $this->assertEquals($data['existingOrderID'],$createOrderRequest->getExistingOrderID());
        $this->assertEquals($data['partyID'],$createOrderRequest->getPartyID());
        $this->assertEquals($data['details'],$createOrderRequest->getDetails());
        $this->assertEquals($data['suppressPackSlipPrice'],$createOrderRequest->getSuppressPackSlipPrice());
        $this->assertEquals($data['transferVolumeToKey'],$createOrderRequest->getTransferVolumeToKey());
        $this->assertEquals($data['returnOrderKey'],$createOrderRequest->getReturnOrderKey());
        $this->assertEquals($data['manualOrderKey'],$createOrderRequest->getManualOrderKey());
        $this->assertEquals($data['existingOrderKey'],$createOrderRequest->getExistingOrderKey());
        $this->assertEquals($data['customerKey'],$createOrderRequest->getCustomerKey());
        $this->assertEquals($data['orderSubStatusTy'],$createOrderRequest->getOrderSubStatusTy());        

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
        
        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],'SANDBOX');
        
        $response = $exigoClient->createCustomer($createCustomerRequest);

        return $response->data;
    }

    /**
     * @test
     */
    public function it_should_create_an_order_for_an_existing_customer(){

        $faker = Faker\Factory::create();

        
        
        $createOrderRequest = new CreateOrder();
        
        //Adding order details
        $orderDetail = new OrderDetail();
        $orderDetail->setItemCode("DY-BN-50215-US");
        $orderDetail->setQuantity(2);
        
        $orderDetail2 = new OrderDetail();
        $orderDetail2->setItemCode("DY-BN-50211-US");
        $orderDetail2->setQuantity(1);
        
        $createOrderRequest->setDetails([$orderDetail, $orderDetail2]);
        
        //Order Data
        $createOrderRequest->setOrderDate((new DateTime)->format('Y-m-d\TH:i:sP'));
        $createOrderRequest->setWarehouseID(1);
        $createOrderRequest->setShipMethodID(6);
        $createOrderRequest->setCurrencyCode("usd");
        $createOrderRequest->setPriceType(1);
        //$createOrderRequest->setCustomerKey(uniqid()); //Non Alphanumeric enabled
        
        //Customer Data
        $id = uniqid();
        $customer = $this->createCustomer();
        $createOrderRequest->setCustomerID($customer->customerID);
        $createOrderRequest->setFirstName($faker->firstName());
        $createOrderRequest->setLastName($faker->lastName());
        $prefix = uniqid();
        $email = $_ENV["PREFIX_EMAIL"].$prefix."@".$_ENV["EMAIL_DOMAIN"];
        $createOrderRequest->setEmail($email);

        //Address Data
        $createOrderRequest->setAddress1("11801 stonehollow drive");
        $createOrderRequest->setCountry("US");
        $createOrderRequest->setState("TX");
        $createOrderRequest->setZip("78758");
        $createOrderRequest->setPhone($faker->phoneNumber());
        

        $client = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"]);

        $response = $client->createOrder($createOrderRequest);

        $this->assertTrue($response->success);
        $this->assertNotNull($response->data->orderID);


        
    }


    

}
