<?php

namespace Thiio\Exigo\Requests;

class Transaction extends ExigoRequest
{

    public $typeName;
    public $request = []; 

    public function setName( string $transactionType ){

        $this->typeName = $transactionType;

        return $this;

    }

    public function addParameter( string $key, $value ){

        $this->request[$key] = $value;

        return $this;

    }

    
    public function getName(){

        return $this->typeName;

    }


    public function getParameter(string $key){

        return $this->request[$key] ?? null;

    }

    public function getRequest(){

        return $this->request;

    }

}
