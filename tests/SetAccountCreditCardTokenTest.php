<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\Customers\CreateCustomer;
use Thiio\Exigo\Requests\Customers\SetAccountCreditCardToken;

#vendor/bin/phpunit tests/SetAccountCreditCardTokenTest.php
class SetAccountCreditCardTokenTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_transaction_instance() : void {

        $setAccountCreditCardTokenRequest = new SetAccountCreditCardToken();

        $this->assertInstanceOf(SetAccountCreditCardToken::class,  $setAccountCreditCardTokenRequest);

    }

    private function buildCustomerBlueprint(){
        $faker = Faker\Factory::create();
        return [
            "customerID" => (int)uniqid(),
            "creditCardAccountType" => "Primary",
            "creditCardToken" => $faker->linuxPlatformToken(),
            "expirationMonth" => 3,
            "expirationYear" => 2050,
            "creditCardType" => 1,
            "billingName" => $faker->name(),
            "useMainAddress" => true,
            "billingAddress" => $faker->streetAddress(),
            "billingAddress2" => "",
            "billingCity" => $faker->city(),
            "billingState" => $faker->state(),
            "billingZip" => $faker->postcode(),
            "billingCountry" => $faker->country(),
            "hideFromWeb" => true,
            "customerKey" => uniqid(),
            "movePrimaryToSecondary" => true,
            "tokenType" => 9,
            "firstSix" => "424242",
            "lastFour" => "4242",
        ];
    }

    /**
     * @test
     */
    public function it_should_fill_instance_with_values(){
        
        $data = $this->buildCustomerBlueprint();

        $setAccountCreditCardTokenRequest = new SetAccountCreditCardToken();
        
        $setAccountCreditCardTokenRequest->setCustomerID($data["customerID"]);
        $setAccountCreditCardTokenRequest->setCreditCardAccountType($data["creditCardAccountType"]);
        $setAccountCreditCardTokenRequest->setCreditCardToken($data["creditCardToken"]);
        $setAccountCreditCardTokenRequest->setExpirationMonth($data["expirationMonth"]);
        $setAccountCreditCardTokenRequest->setExpirationYear($data["expirationYear"]);
        $setAccountCreditCardTokenRequest->setCreditCardType($data["creditCardType"]);
        $setAccountCreditCardTokenRequest->setBillingName($data["billingName"]);
        $setAccountCreditCardTokenRequest->setUseMainAddress($data["useMainAddress"]);
        $setAccountCreditCardTokenRequest->setBillingAddress($data["billingAddress"]);
        $setAccountCreditCardTokenRequest->setBillingAddress2($data["billingAddress2"]);
        $setAccountCreditCardTokenRequest->setBillingCity($data["billingCity"]);
        $setAccountCreditCardTokenRequest->setBillingState($data["billingState"]);
        $setAccountCreditCardTokenRequest->setBillingZip($data["billingZip"]);
        $setAccountCreditCardTokenRequest->setBillingCountry($data["billingCountry"]);
        $setAccountCreditCardTokenRequest->setHideFromWeb($data["hideFromWeb"]);
        $setAccountCreditCardTokenRequest->setCustomerKey($data["customerKey"]);
        $setAccountCreditCardTokenRequest->setMovePrimaryToSecondary($data["movePrimaryToSecondary"]);
        $setAccountCreditCardTokenRequest->setTokenType($data["tokenType"]);
        $setAccountCreditCardTokenRequest->setFirstSix($data["firstSix"]);
        $setAccountCreditCardTokenRequest->setLastFour($data["lastFour"]);

        $this->assertEquals($setAccountCreditCardTokenRequest->getCustomerID(), $data["customerID"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getCreditCardAccountType(), $data["creditCardAccountType"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getCreditCardToken(), $data["creditCardToken"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getExpirationMonth(), $data["expirationMonth"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getExpirationYear(), $data["expirationYear"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getCreditCardType(), $data["creditCardType"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingName(), $data["billingName"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getUseMainAddress(), $data["useMainAddress"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingAddress(), $data["billingAddress"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingAddress2(), $data["billingAddress2"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingCity(), $data["billingCity"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingState(), $data["billingState"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingZip(), $data["billingZip"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getBillingCountry(), $data["billingCountry"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getHideFromWeb(), $data["hideFromWeb"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getCustomerKey(), $data["customerKey"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getMovePrimaryToSecondary(), $data["movePrimaryToSecondary"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getTokenType(), $data["tokenType"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getFirstSix(), $data["firstSix"]);
        $this->assertEquals($setAccountCreditCardTokenRequest->getLastFour(), $data["lastFour"]);
    }

    /**
     * @test
     */
    public function it_should_set_a_card_on_exigo(){
        $faker = Faker\Factory::create();
        $createCustomerRequest = new CreateCustomer();
        $createCustomerRequest->setFirstName($faker->firstName());
        $createCustomerRequest->setLastName($faker->lastName());
        $createCustomerRequest->setCustomerType(1);
        $prefix = uniqid();
        $email = $_ENV["PREFIX_EMAIL"].$prefix."@".$_ENV["EMAIL_DOMAIN"];
        $createCustomerRequest->setEmail($email);

        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],'SANDBOX');
        
        $customerResponse = $exigoClient->createCustomer($createCustomerRequest);

        $setAccountCreditCardTokenRequest = new SetAccountCreditCardToken();
        $setAccountCreditCardTokenRequest->setCustomerID($customerResponse->data->customerID);//required
        $setAccountCreditCardTokenRequest->setCreditCardToken($_ENV["CARD_TOKEN_REQUEST"]);//required
        $setAccountCreditCardTokenRequest->setExpirationMonth(3);//required
        $setAccountCreditCardTokenRequest->setExpirationYear(2030);//required
        $setAccountCreditCardTokenRequest->setFirstSix("424242");
        $setAccountCreditCardTokenRequest->setLastFour("4242");
        $setAccountCreditCardTokenRequest->setBillingCountry("US");//required
        $setAccountCreditCardTokenRequest->setBillingState("TX");//required

        $response = $exigoClient->setAccountCreditCardToken($setAccountCreditCardTokenRequest);
        
        $this->assertTrue($response->success);

    }

}
