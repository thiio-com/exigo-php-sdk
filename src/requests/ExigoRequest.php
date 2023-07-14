<?php

namespace Thiio\Exigo\Requests;

use JsonSerializable;

class ExigoRequest implements JsonSerializable
{

    public function jsonSerialize(): mixed{
        
        return get_object_vars($this);

    }
    
    public function toArray(){
        
        return array_filter(json_decode(json_encode($this), true));

    }


}
