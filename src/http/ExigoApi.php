<?php

namespace Thiio\Exigo\Http;

use Thiio\Exigo\Requests\CalculateOrder;
use Thiio\Exigo\Requests\GetItems;

class ExigoApi extends Client
{

    public function __construct(string $login, string $password, string $company, string $env = "PRODUCTION")
    {
        parent::__construct($login, $password, $company, $env);
    }

    
    /**
     * CalculateOrder 
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=CalculateOrder
     */
    public function calculateOrder( CalculateOrder $request, string $method = "POST", array $data = [] ){
        
        return $this->makeRequest($method, $request::ENDPOINT, $request->toArray() );

    }

    /**
     * GetItems
     * https://api.exigo.com/3.0/ExigoApi.asmx?op=GetItems
     */
    public function getItems( GetItems $request, string $method="GET", $extraParams = [] ){

        //$params = array_merge($extraParams, $request->toArray());

        $fullUrl = $request::ENDPOINT.$request->convertAttributesToQueryParams();
        echo  $fullUrl;
        return $this->makeRequest($method, $fullUrl);

    }

}
