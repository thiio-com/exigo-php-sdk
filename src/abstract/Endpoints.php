<?php

namespace Thiio\Exigo\Abstract;

abstract class Endpoints
{

    const ENDPOINTS = [
        "calculateOrder",
    ];

    public static function validEndpoints(){
        return self::ENDPOINTS;
    }


}
