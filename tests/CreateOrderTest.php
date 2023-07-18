<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\CreateOrder;

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

}
