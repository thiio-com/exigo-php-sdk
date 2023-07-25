<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\OrdersPayments\ChargeCreditCardToken;

#vendor/bin/phpunit tests/ChargeCreditCardTokenTest.php
class ChargeCreditCardTokenTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_charge_credit_card_instance(){

            $chargeCreditCardRequest = new ChargeCreditCardToken();

            $this->assertInstanceOf(ChargeCreditCardToken::class, $chargeCreditCardRequest);

    }

    

}
