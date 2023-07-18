<?php

namespace Thiio\Exigo\Http;

use Thiio\Exigo\Requests\CalculateOrder;
use Thiio\Exigo\Requests\CreateCustomer;
use Thiio\Exigo\Requests\GetCustomers;
use Thiio\Exigo\Requests\GetItems;

class ExigoApi extends Client
{
    const DEBUG = true;


    public function __construct(string $login, string $password, string $company, string $env = "PRODUCTION")
    {
        parent::__construct($login, $password, $company, $env);
    }

    
    /**
     * CalculateOrder 
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=CalculateOrder
     */
    public function calculateOrder( CalculateOrder $request, string $method = "POST", array $data = [] ){
        
        return $this->makeRequest($method, $request::ENDPOINT, ['debug' => self::DEBUG, 'json' => $request->toArray() ]);

    }

    /**
     * GetItems
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=GetItems
     */
    public function getItems( GetItems $request, string $method="GET", $extraParams = [] ){

        //$params = array_merge($extraParams, $request->toArray());

        $fullUrl = $request::ENDPOINT.$request->convertAttributesToQueryParams();
        
        return $this->makeRequest($method, $fullUrl);

    }

    /**
     * CreateCustomer
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=CreateCustomer
     */
    public function createCustomer( CreateCustomer $request, string $method = "POST", array $data = [] ){

        return $this->makeRequest($method, $request::ENDPOINT, ['debug' => self::DEBUG, 'json' => $request->toArray() ]);

    }


    /**
     * GetCustomers
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=GetCustomers
     */
    public function getCustomers( GetCustomers $request, string $method = "GET", $extraParams = [] ){
        
        $fullUrl = $request::ENDPOINT.$request->convertAttributesToQueryParams();
        
        return $this->makeRequest($method, $fullUrl);
    }

}