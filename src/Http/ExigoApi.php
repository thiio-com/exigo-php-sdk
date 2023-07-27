<?php

namespace Thiio\Exigo\Http;

use Thiio\Exigo\Requests\Items\GetItems;
use Thiio\Exigo\Requests\Customers\GetCustomers;
use Thiio\Exigo\Requests\Customers\CreateCustomer;
use Thiio\Exigo\Requests\Items\GetWarehouses;
use Thiio\Exigo\Requests\OrdersPayments\GetOrders;
use Thiio\Exigo\Requests\OrdersPayments\CreateOrder;
use Thiio\Exigo\Requests\OrdersPayments\CalculateOrder;
use Thiio\Exigo\Requests\OrdersPayments\ChargeCreditCardToken;
use Thiio\Exigo\Requests\OrdersPayments\ProcessTransaction;

class ExigoApi extends Client
{
    const DEBUG = false;


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
     * ChargeCreditCardToken 
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=ChargeCreditCardToken
     */
    public function chargeCreditCardToken( ChargeCreditCardToken $request, string $method = "POST", array $data = [] ){
        
        return $this->makeRequest($method, $request::ENDPOINT, ['debug' => self::DEBUG, 'json' => $request->toArray() ]);

    }


    /**
     * CreateOrder 
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=CreateOrder
     */
    public function createOrder( CreateOrder $request, string $method = "POST", array $data = [] ){
        
        return $this->makeRequest($method, $request::ENDPOINT, ['debug' => self::DEBUG, 'json' => $request->toArray() ]);

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


    /**
     * GetItems
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=GetItems
     */
    public function getItems( GetItems $request, string $method="GET", $extraParams = [] ){


        $fullUrl = $request::ENDPOINT.$request->convertAttributesToQueryParams();
        
        return $this->makeRequest($method, $fullUrl);

    }


    /**
     * GetOrders
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=GetItems
     */
    public function getOrders( GetOrders $request, string $method="GET", $extraParams = [] ){


        $fullUrl = $request::ENDPOINT.$request->convertAttributesToQueryParams();
        
        return $this->makeRequest($method, $fullUrl);

    }


     /**
     * GetWarehouses
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=GetWarehouses
     */
    public function getWarehouses( GetWarehouses $request, string $method="GET", $extraParams = [] ){


        $fullUrl = $request::ENDPOINT.$request->convertAttributesToQueryParams();
        
        return $this->makeRequest($method, $fullUrl);

    }


    /**
     * ProcessTransaction
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=CreateCustomer
     */
    public function processTransaction( ProcessTransaction $request, string $method = "POST", array $data = [] ){

        return $this->makeRequest($method, $request::ENDPOINT, ['debug' => self::DEBUG, 'json' => $request->toArray() ]);

    }


   
}
