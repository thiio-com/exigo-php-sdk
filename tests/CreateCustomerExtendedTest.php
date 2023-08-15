<?php

use Thiio\Exigo\Http\ExigoApi;
use PHPUnit\Framework\TestCase;
use Thiio\Exigo\Requests\Customers\CreateCustomerExtended;
use Thiio\Exigo\Requests\OrdersPayments\OrderDetail;
use Thiio\Exigo\Requests\OrdersPayments\CalculateOrder;

#vendor/bin/phpunit tests/CreateCustomerExtendedTest.php
class CreateCustomerExtendedTest extends TestCase
{


     /**
     * @test
     */
    public function it_should_create_a_create_customer_extended_instance(): void{

        $createCustomerExtended = new CreateCustomerExtended();
        
        $this->assertInstanceOf(CreateCustomerExtended::class, $createCustomerExtended);

    }


    private function getBlueprint(){
        return[
            "customerID" => 1,
            "extendedGroupID" => 2,
            "customerKey" => "customerKey",
            "field1" => "field1",
            "field2" => "field2",
            "field3" => "field3",
            "field4" => "field4",
            "field5" => "field5",
            "field6" => "field6",
            "field7" => "field7",
            "field8" => "field8",
            "field9" => "field9",
            "field10" => "field10",
            "field11" => "field11",
            "field12" => "field12",
            "field13" => "field13",
            "field14" => "field14",
            "field15" => "field15",
            "field16" => "field16",
            "field17" => "field17",
            "field18" => "field18",
            "field19" => "field19",
            "field20" => "field20",
            "field21" => "field21",
            "field22" => "field22",
            "field23" => "field23",
            "field24" => "field24",
            "field25" => "field25",
            "field26" => "field26",
            "field27" => "field27",
            "field28" => "field28",
            "field29" => "field29",
            "field30" => "field30"
        ];
    }

    /**
     * @test
     */

     public function it_should_fill_a_calculate_order(){
        
        $data = $this->getBlueprint();
        
        $createCustomerExtended = new CreateCustomerExtended();
        
        $createCustomerExtended->setCustomerID($data["customerID"]);
        $createCustomerExtended->setExtendedGroupID($data["extendedGroupID"]);
        $createCustomerExtended->setCustomerKey($data["customerKey"]);
        $createCustomerExtended->setField1($data["field1"]);
        $createCustomerExtended->setField2($data["field2"]);
        $createCustomerExtended->setField3($data["field3"]);
        $createCustomerExtended->setField4($data["field4"]);
        $createCustomerExtended->setField5($data["field5"]);
        $createCustomerExtended->setField6($data["field6"]);
        $createCustomerExtended->setField7($data["field7"]);
        $createCustomerExtended->setField8($data["field8"]);
        $createCustomerExtended->setField9($data["field9"]);
        $createCustomerExtended->setField10($data["field10"]);
        $createCustomerExtended->setField11($data["field11"]);
        $createCustomerExtended->setField12($data["field12"]);
        $createCustomerExtended->setField13($data["field13"]);
        $createCustomerExtended->setField14($data["field14"]);
        $createCustomerExtended->setField15($data["field15"]);
        $createCustomerExtended->setField16($data["field16"]);
        $createCustomerExtended->setField17($data["field17"]);
        $createCustomerExtended->setField18($data["field18"]);
        $createCustomerExtended->setField19($data["field19"]);
        $createCustomerExtended->setField20($data["field20"]);
        $createCustomerExtended->setField21($data["field21"]);
        $createCustomerExtended->setField22($data["field22"]);
        $createCustomerExtended->setField23($data["field23"]);
        $createCustomerExtended->setField24($data["field24"]);
        $createCustomerExtended->setField25($data["field25"]);
        $createCustomerExtended->setField26($data["field26"]);
        $createCustomerExtended->setField27($data["field27"]);
        $createCustomerExtended->setField28($data["field28"]);
        $createCustomerExtended->setField29($data["field29"]);
        $createCustomerExtended->setField30($data["field30"]);


        $this->assertEquals($createCustomerExtended->getCustomerID(), $data["customerID"]);
        $this->assertEquals($createCustomerExtended->getExtendedGroupID(), $data["extendedGroupID"]);
        $this->assertEquals($createCustomerExtended->getCustomerKey(), $data["customerKey"]);
        $this->assertEquals($createCustomerExtended->getField1(), $data["field1"]);
        $this->assertEquals($createCustomerExtended->getField2(), $data["field2"]);
        $this->assertEquals($createCustomerExtended->getField3(), $data["field3"]);
        $this->assertEquals($createCustomerExtended->getField4(), $data["field4"]);
        $this->assertEquals($createCustomerExtended->getField5(), $data["field5"]);
        $this->assertEquals($createCustomerExtended->getField6(), $data["field6"]);
        $this->assertEquals($createCustomerExtended->getField7(), $data["field7"]);
        $this->assertEquals($createCustomerExtended->getField8(), $data["field8"]);
        $this->assertEquals($createCustomerExtended->getField9(), $data["field9"]);
        $this->assertEquals($createCustomerExtended->getField10(), $data["field10"]);
        $this->assertEquals($createCustomerExtended->getField11(), $data["field11"]);
        $this->assertEquals($createCustomerExtended->getField12(), $data["field12"]);
        $this->assertEquals($createCustomerExtended->getField13(), $data["field13"]);
        $this->assertEquals($createCustomerExtended->getField14(), $data["field14"]);
        $this->assertEquals($createCustomerExtended->getField15(), $data["field15"]);
        $this->assertEquals($createCustomerExtended->getField16(), $data["field16"]);
        $this->assertEquals($createCustomerExtended->getField17(), $data["field17"]);
        $this->assertEquals($createCustomerExtended->getField18(), $data["field18"]);
        $this->assertEquals($createCustomerExtended->getField19(), $data["field19"]);
        $this->assertEquals($createCustomerExtended->getField20(), $data["field20"]);
        $this->assertEquals($createCustomerExtended->getField21(), $data["field21"]);
        $this->assertEquals($createCustomerExtended->getField22(), $data["field22"]);
        $this->assertEquals($createCustomerExtended->getField23(), $data["field23"]);
        $this->assertEquals($createCustomerExtended->getField24(), $data["field24"]);
        $this->assertEquals($createCustomerExtended->getField25(), $data["field25"]);
        $this->assertEquals($createCustomerExtended->getField26(), $data["field26"]);
        $this->assertEquals($createCustomerExtended->getField27(), $data["field27"]);
        $this->assertEquals($createCustomerExtended->getField28(), $data["field28"]);
        $this->assertEquals($createCustomerExtended->getField29(), $data["field29"]);
        $this->assertEquals($createCustomerExtended->getField30(), $data["field30"]);
       

    }

    /**
     * @test
     */
    public function it_should_fail_creating_customer_on_exigo(){
        
        $data = $this->getBlueprint();
        
        $createCustomerExtended = new CreateCustomerExtended();
        
        $createCustomerExtended->setCustomerID($data["customerID"]);
        $createCustomerExtended->setExtendedGroupID($data["extendedGroupID"]);
        $createCustomerExtended->setCustomerKey($data["customerKey"]);
        $createCustomerExtended->setField1($data["field1"]);
        $createCustomerExtended->setField2($data["field2"]);
        $createCustomerExtended->setField3($data["field3"]);
        $createCustomerExtended->setField4($data["field4"]);
        $createCustomerExtended->setField28($data["field28"]);
        $createCustomerExtended->setField29($data["field29"]);
        $createCustomerExtended->setField30($data["field30"]);

        $exigoApi = new ExigoApi($_ENV["TEST_USER"],$_ENV["TEST_PASSWORD"],$_ENV["TEST_COMPANY"],$_ENV['API_URL_ENDPOINT']);

        $response = $exigoApi->createCustomerExtended($createCustomerExtended);

        $this->assertFalse($response->success);
       

    }

    


}
