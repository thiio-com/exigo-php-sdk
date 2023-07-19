
<?php

use PHPUnit\Framework\TestCase;

use Thiio\Exigo\Requests\Transaction;
use Thiio\Exigo\Requests\OrdersPayments\ProcessTransaction;

#vendor/bin/phpunit tests/ProcessTransactionTest.php
class ProcessTransactionTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_transaction_instance() : void {

        $transaction = new Transaction();

        $this->assertInstanceOf(Transaction::class,  $transaction);

    }


    private function buildCustomerBlueprint(){
        $faker = Faker\Factory::create();
        return [
           "firstName"      => $faker->firstName(),
           "lastName"       => $faker->lastName(),
           "customerType"   => 1,
           "customerStatus" => 1,
           "mainCity"       => $faker->city(),
           "mainState"      => $faker->state(),
           "mainZip"        => $faker->postcode(),
           "mainCountry"    => $faker->country(),
        ];
    }


    private function buildOrderBlueprint(){
        $faker = Faker\Factory::create();
        return [
            "orderStatus"  => 1,
            "orderDate"    => (new DateTime)->format('Y-m-d\TH:i:sP'),
            "currencyCode" => "usd",
            "warehouseID"  => 1,
            "shipMethodID" => 6,
            "priceType"    => 1,
            "firstName"    => $faker->firstName(),
            "lastName"     => $faker->lastName(),
            "address1"     => $faker->streetAddress(),
            "state"        => $faker->state(),
            "country"      => $faker->country(),
            "details"      => [
                [
                    "itemCode" => "DY-BN-50215-US",
                    "quantity" => 2
                ],
                [
                    "itemCode" => "DY-BN-50211-US",
                    "quantity" => 1
                ],
            ]
        ];
    }

    private function buildChargeCreditCardTokenBlueprint(){

        return [
            "creditCardToken" => "41EDX4872QC71111",
            "expirationMonth" => 3,
            "expirationYear"  => 2025
        ];

    }

    /**
     * @test
     */
    public function it_should_fill_a_transaction_obj() : void {
                
        $customer = $this->buildCustomerBlueprint();
        $customerTransaction = new Transaction();
        $customerTransaction->setName("CreateCustomerRequest");
        foreach($customer as $key => $value){
            $customerTransaction->addParameter($key,$value);
        }

        $order    = $this->buildOrderBlueprint();
        $orderTransaction = new Transaction();
        $orderTransaction->setName("CreateOrderRequest");
        foreach($order as $key => $value){
            $orderTransaction->addParameter($key,$value);
        }

        $charge   = $this->buildChargeCreditCardTokenBlueprint();
        $chargeTransaction = new Transaction();
        $chargeTransaction->setName("ChargeCreditCardTokenRequest");
        foreach($charge as $key => $value){
            $chargeTransaction->addParameter($key,$value);
        }
        
        $this->assertEquals($customer["firstName"], $customerTransaction->getParameter("firstName"));
        $this->assertEquals($customer["lastName"], $customerTransaction->getParameter("lastName"));
        $this->assertEquals($customer["customerType"], $customerTransaction->getParameter("customerType"));
        $this->assertEquals($customer["customerStatus"], $customerTransaction->getParameter("customerStatus"));
        $this->assertEquals($customer["mainCity"], $customerTransaction->getParameter("mainCity"));
        $this->assertEquals($customer["mainState"], $customerTransaction->getParameter("mainState"));
        $this->assertEquals($customer["mainZip"], $customerTransaction->getParameter("mainZip"));
        $this->assertEquals($customer["mainCountry"], $customerTransaction->getParameter("mainCountry"));


        $this->assertEquals($order["orderStatus"], $orderTransaction->getParameter("orderStatus"));
        $this->assertEquals($order["orderDate"], $orderTransaction->getParameter("orderDate"));
        $this->assertEquals($order["currencyCode"], $orderTransaction->getParameter("currencyCode"));
        $this->assertEquals($order["warehouseID"], $orderTransaction->getParameter("warehouseID"));
        $this->assertEquals($order["shipMethodID"], $orderTransaction->getParameter("shipMethodID"));
        $this->assertEquals($order["priceType"], $orderTransaction->getParameter("priceType"));
        $this->assertEquals($order["firstName"], $orderTransaction->getParameter("firstName"));
        $this->assertEquals($order["lastName"], $orderTransaction->getParameter("lastName"));
        $this->assertEquals($order["address1"], $orderTransaction->getParameter("address1"));
        $this->assertEquals($order["state"], $orderTransaction->getParameter("state"));
        $this->assertEquals($order["country"], $orderTransaction->getParameter("country"));
        $this->assertEquals($order["details"], $orderTransaction->getParameter("details"));

        $this->assertEquals($charge["creditCardToken"], $chargeTransaction->getParameter("creditCardToken"));
        $this->assertEquals($charge["expirationMonth"], $chargeTransaction->getParameter("expirationMonth"));
        $this->assertEquals($charge["expirationYear"], $chargeTransaction->getParameter("expirationYear"));

    }


    /**
     * @test
     */
    public function it_should_convert_transaction_to_array(){

        $order    = $this->buildOrderBlueprint();
        $orderTransaction = new Transaction();
        $orderTransaction->setName("CreateOrderRequest");
        foreach($order as $key => $value){
            $orderTransaction->addParameter($key,$value);
        }

        $this->assertIsArray($orderTransaction->toArray());
        $this->assertEquals($order, $orderTransaction->getRequest());
        
    }


    /**
     * @test
     */
    public function it_should_return_a_process_transaction_instace(){

        $processTransaction = new ProcessTransaction();

        $this->assertInstanceOf(ProcessTransaction::class, $processTransaction);
        
    }


    /**
     * @test
     */
    public function it_should_add_a_transaction_to_process_transaction(){

        $order    = $this->buildOrderBlueprint();
        $orderTransaction = new Transaction();
        $orderTransaction->setName("CreateOrderRequest");
        foreach($order as $key => $value){
            $orderTransaction->addParameter($key,$value);
        }

        $processTransaction = new ProcessTransaction();
        $processTransaction->addTransaction($orderTransaction);

        $this->assertEquals($processTransaction->popTransaction(), $orderTransaction);

    }

    /**
     * @test
     */
    public function it_should_add_several_transactions_to_process_transaction(){

        $customer = $this->buildCustomerBlueprint();
        $customerTransaction = new Transaction();
        $customerTransaction->setName("CreateCustomerRequest");
        foreach($customer as $key => $value){
            $customerTransaction->addParameter($key,$value);
        }

        $order    = $this->buildOrderBlueprint();
        $orderTransaction = new Transaction();
        $orderTransaction->setName("CreateOrderRequest");
        foreach($order as $key => $value){
            $orderTransaction->addParameter($key,$value);
        }

        $charge   = $this->buildChargeCreditCardTokenBlueprint();
        $chargeTransaction = new Transaction();
        $chargeTransaction->setName("ChargeCreditCardTokenRequest");
        foreach($charge as $key => $value){
            $chargeTransaction->addParameter($key,$value);
        }

        $processTransaction = new ProcessTransaction();
        $processTransaction->addTransactions([$customerTransaction, $orderTransaction, $chargeTransaction]);

        $this->assertIsArray($processTransaction->getRequests());
        $this->assertNotEmpty($processTransaction->getRequests());
        $this->assertEquals([$customerTransaction, $orderTransaction, $chargeTransaction], $processTransaction->getRequests());

    }


    /**
     * @test
     */
    public function it_should_convert_all_transactions_to_array(){

        $customer = $this->buildCustomerBlueprint();
        $customerTransaction = new Transaction();
        $customerTransaction->setName("CreateCustomerRequest");
        foreach($customer as $key => $value){
            $customerTransaction->addParameter($key,$value);
        }

        $order    = $this->buildOrderBlueprint();
        $orderTransaction = new Transaction();
        $orderTransaction->setName("CreateOrderRequest");
        foreach($order as $key => $value){
            $orderTransaction->addParameter($key,$value);
        }

        $charge   = $this->buildChargeCreditCardTokenBlueprint();
        $chargeTransaction = new Transaction();
        $chargeTransaction->setName("ChargeCreditCardTokenRequest");
        foreach($charge as $key => $value){
            $chargeTransaction->addParameter($key,$value);
        }

        $processTransaction = new ProcessTransaction();
        $processTransaction->addTransactions([$customerTransaction, $orderTransaction, $chargeTransaction]);

        
        $this->assertIsArray($processTransaction->toArray());
        $this->assertEquals(
            json_encode([
                    "transactionRequests" => [
                        $customerTransaction->toArray(),
                        $orderTransaction->toArray(), 
                        $chargeTransaction->toArray()
                    ]
                ]
            ), json_encode($processTransaction->toArray()));

    }


    /**
     * @test
     */
    public function it_should_merge_transactions_correctly(){

        $customer = $this->buildCustomerBlueprint();
        $customerTransaction = new Transaction();
        $customerTransaction->setName("CreateCustomerRequest");
        foreach($customer as $key => $value){
            $customerTransaction->addParameter($key,$value);
        }

        $order    = $this->buildOrderBlueprint();
        $orderTransaction = new Transaction();
        $orderTransaction->setName("CreateOrderRequest");
        foreach($order as $key => $value){
            $orderTransaction->addParameter($key,$value);
        }

        $charge   = $this->buildChargeCreditCardTokenBlueprint();
        $chargeTransaction = new Transaction();
        $chargeTransaction->setName("ChargeCreditCardTokenRequest");
        foreach($charge as $key => $value){
            $chargeTransaction->addParameter($key,$value);
        }

        $processTransaction = new ProcessTransaction();
        $processTransaction->addTransactions([$customerTransaction]);
        $processTransaction->addTransactions([$orderTransaction, $chargeTransaction]);

        
        $this->assertIsArray($processTransaction->toArray());
        $this->assertEquals(
            json_encode([
                    "transactionRequests" => [
                        $customerTransaction->toArray(),
                        $orderTransaction->toArray(), 
                        $chargeTransaction->toArray()
                    ]
                ]
            ), json_encode($processTransaction->toArray()));

    }


}
