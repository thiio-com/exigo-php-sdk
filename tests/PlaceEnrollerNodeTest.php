<?php

use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Http\ExigoApi;
use Thiio\Exigo\Requests\TreeMovement\PlaceEnrollerNode;

#vendor/bin/phpunit tests/PlaceEnrollerNodeTest.php
class PlaceEnrollerNodeTest extends TestCase
{

    /**
     * @test
     */
    public function it_should_return_a_place_enroller_node_instance() : void {

        $placeEnrollerNode = new PlaceEnrollerNode();

        $this->assertInstanceOf(PlaceEnrollerNode::class,  $placeEnrollerNode);

    }
    

    /**
     * @test
     */
    public function it_should_fille_a_place_enroller_node_instance() : void {

        $data = [
            "customer_id" => 1,
            "to_enroller_id"=>2,
            "reason" => "Demo Reason",
            "customer_key" => "demo_key",
            "to_enroller_key" => "to_demo_key"
        ];

        $placeEnrollerNode = new PlaceEnrollerNode();

        $placeEnrollerNode->setCustomerID($data["customer_id"]);
        $placeEnrollerNode->setToEnrollerID($data["to_enroller_id"]);
        $placeEnrollerNode->setReason($data["reason"]);
        $placeEnrollerNode->setCustomerKey($data["customer_key"]);
        $placeEnrollerNode->setToEnrollerKey($data["to_enroller_key"]);

        $this->assertEquals($placeEnrollerNode->getCustomerID(), $data["customer_id"]);
        $this->assertEquals($placeEnrollerNode->getToEnrollerID(), $data["to_enroller_id"]);
        $this->assertEquals($placeEnrollerNode->getReason(), $data["reason"]);
        $this->assertEquals($placeEnrollerNode->getCustomerKey(), $data["customer_key"]);
        $this->assertEquals($placeEnrollerNode->getToEnrollerKey(), $data["to_enroller_key"]);

    }


    /**
     * @test
     */
    public function it_should_fail_place_enroller_node_instance() : void {

        $data = [
            "customer_id" => 1,
            "to_enroller_id"=>2,
            "reason" => "Demo Reason",
            "customer_key" => "demo_key",
            "to_enroller_key" => "to_demo_key"
        ];

        $placeEnrollerNode = new PlaceEnrollerNode();

        $placeEnrollerNode->setCustomerID($data["customer_id"]);
        $placeEnrollerNode->setToEnrollerID($data["to_enroller_id"]);
        $placeEnrollerNode->setReason($data["reason"]);
        $placeEnrollerNode->setCustomerKey($data["customer_key"]);
        $placeEnrollerNode->setToEnrollerKey($data["to_enroller_key"]);

        $exigoClient = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);
        
        $response = $exigoClient->placeEnrollerNode($placeEnrollerNode);
        
        $this->assertFalse($response->success);

    }


}
