<?php

use Requests\Http\Client;
use PHPUnit\Framework\TestCase;
use Exceptions\ExigoRequestException;
use Thiio\Exigo\Http\ExigoApi as ExigoClient;
use Thiio\Exigo\Requests\OrdersPayments\CalculateOrder;

#vendor/bin/phpunit tests/ClientTest.php
class ClientTest extends TestCase{


    const USER      = "dev_api_thiio";
    const PASSWORD  = "&Dh92^KUruF!Zq";
    const COMPANY   = "Yoli";


    /**
     * @test
     */
    public function it_should_build_a_client_instance(): void{

        $client = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);

        $this->assertInstanceOf(ExigoClient::class, $client);

    }

    /**
     * @test
     */
    public function it_should_throw_due_invalid_env(): void{

        $env = "demo";
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("$env is invalid");
        
        $client = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY,$env);

    }

    /**
     * @test
     */
    public function it_should_throw_due_invalid_env_param(): void{

        $env = "demo";
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("$env is invalid");
        
        $client = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY,$env);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method = $reflection->getMethod('validEnv');

        $result = $method->invoke($client, $env);

    }

    /**
     * @test
     */
    public function it_should_return_true_with_sandbox_env(): void{
        
        $env = 'SANDBOX';
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY, $env);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method     = $reflection->getMethod('validEnv');

        $result = $method->invoke($client, $env);

        $this->assertTrue($result);

    }

    /**
     * @test
     */
    public function it_should_return_true_with_production_env(): void{
        
        $env = 'PRODUCTION';
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY, $env);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method     = $reflection->getMethod('validEnv');

        $result = $method->invoke($client, $env);

        $this->assertTrue($result);

    }

    
    /**
     * @test
     */
    public function it_should_resolve_the_correct_main_url(): void{
        
        $company = strtolower(self::COMPANY);
        
        $url = "https://{$company}-api.exigo.com";

        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method     = $reflection->getMethod('resolveMainUrl');

        $result = $method->invoke($client);

        $this->assertEquals($result, $url);

    }

    /**
     * @test
     */
    public function it_should_set_the_company_value(): void{
        
        $company = "mydemocompany";
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);
        $client->setCompany($company);

        $this->assertEquals($company, $client->getCompany());

    }

    /**
     * @test
     */
    public function it_should_fetch_a_valid_token(): void{
        
        $token = base64_encode(self::USER."@".self::COMPANY.":".self::PASSWORD);
        
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method     = $reflection->getMethod('fetchToken');

        $result = $method->invoke($client);

        $this->assertEquals($token, $result);

    }


     /**
     * @test
     */
    public function it_should_fail_due_no_matching_tokens(): void{
        
        $token = base64_encode(self::USER."@demo:".self::PASSWORD);
        
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method     = $reflection->getMethod('fetchToken');

        $result = $method->invoke($client);

        $this->assertNotEquals($token, $result);

    }


    /**
     * @test
     */
    public function it_should_match_headers(): void{
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);
        $reflection = new ReflectionClass(ExigoClient::class);
        $method     = $reflection->getMethod('fetchToken');
        $token = $method->invoke($client);
        $headers = [
            "Content-Type"  => "application/json",
            "Authorization" => "Basic {$token}"
        ];

        $storedHeaders = $client->getHeaders();

        $this->assertEquals($headers, $storedHeaders);
    }


    /**
     * @test
     */
    public function it_should_overwrite_headers(): void{
        
        $client     = new ExigoClient(self::USER,self::PASSWORD,self::COMPANY);
        $headers = [
            "header1" => "header1",
            "header2" => "header2",
            "header3" => "header3",
            "header4" => "header4",
        ];

        $client->setHeaders($headers);
        
        $this->assertEquals($headers, $client->getHeaders());
    }




}