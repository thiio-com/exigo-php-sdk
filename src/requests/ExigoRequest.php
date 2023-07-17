<?php

namespace Thiio\Exigo\Requests;

use JsonSerializable;

class ExigoRequest implements JsonSerializable
{

    const API_VERSION = "/3.0";

    public function jsonSerialize(): mixed{
        
        return get_object_vars($this);

    }
    
    public function toArray(){
        
        return array_filter(json_decode(json_encode($this), true));

    }

    public function convertAttributesToQueryParams(){


        return "?".http_build_query($this->toArray());

        // $attributes = $this->toArray();
        // $index = 0;
        // $totalAttributes = count($attributes);
        // $queryParams = "";
        // foreach($attributes as $key => $value){
        //     if( $index === 0 )
        //         $queryParams .= "?";
        //     $index++;
        //     if( is_null($attributes[$key]) ) continue;
        //     if( is_array($attributes[$key]) ){
        //         $params = implode(',',$attributes[$key]);
        //         $queryParams .= "{$key}=[{$params}]";
        //     }else{
        //         $queryParams .= "$key=$attributes[$key]";
        //     }
        //     if( $index < $totalAttributes )
        //         $queryParams .= "&";
        // }
        // return $queryParams;

    }


}
