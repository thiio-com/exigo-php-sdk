<?php

namespace Thiio\Exigo\Requests;

use JsonSerializable;

class ExigoRequest implements JsonSerializable
{

    const API_VERSION = "/3.0";

    const DATE_FORMAT = "Y-m-d H:i:s";

    public function jsonSerialize(): mixed{
        
        return get_object_vars($this);

    }
    
    public function toArray(){
        
        return array_filter(json_decode(json_encode($this), true),fn($value) => ! is_null($value));

    }

    public function convertAttributesToQueryParams(){

        return "?".http_build_query($this->toArray());

    }


    


}
