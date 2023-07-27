# README #

### Exigo API SDK for PHP ###

The Exigo API SDK for PHP is a PHP package created by the Thiio Team. It is designed to simplify the process of consuming Exigo API endpoints. With this SDK, you can easily interact with Exigo's comprehensive set of APIs to manage various aspects of your business data, including customers, orders, products, and more. The package provides a simple and efficient API for handling API requests and aims to seamlessly integrate Exigo's APIs into your PHP projects.

## Installation

Install the Exigo API SDK using Composer:

```bash
composer require thiio/exigo-php-sdk
```

To execute all tests located in the "tests" folder, use the following command in the terminal or command prompt:

```bash
vendor/bin/phpunit tests/
```
vendor/bin/phpunit: This command runs the PHPUnit command-line tool located in the "vendor/bin" directory of your project. It's installed as a development dependency via Composer.
tests/: This specifies the path to the directory containing your test files. Replace it with a different path if your tests are organized elsewhere.
Make sure you have PHPUnit installed and its dependencies up-to-date before running the command.

### Process Transaction Example


With GitHub, I usually insert a blockquote.

> **_NOTE:_**  You cand find more exampls in the **/tests** folder.

```php
 public function it_should_process_a_transaction(){

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
        $processTransaction->addTransactions([$customerTransaction,$orderTransaction, $chargeTransaction]);

        $client = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"]);
        
        $response = $client->processTransaction($processTransaction);

        $this->assertFalse($response->success);

    }
```