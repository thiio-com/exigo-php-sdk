<?php

namespace Exceptions;

use Exception;

class ExigoRequestException extends Exception
{

    protected $message = "ErrorConsumingExigoAPI";

    public function __construct( $message = null )
    {
        
        if( $message ){
            $this->message = $message;
        }

    }


}
