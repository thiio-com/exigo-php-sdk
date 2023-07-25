<?php

namespace Thiio\Exigo\Requests\OrdersPayments;

use Thiio\Exigo\Requests\ExigoRequest;
use Thiio\Exigo\Requests\Transaction;

class ProcessTransaction extends ExigoRequest
{

    const ENDPOINT = self::API_VERSION."/transaction";

    public $transactionRequests = [];

    
    public function addTransaction( Transaction $transaction ){

        $this->transactionRequests[] = $transaction;

    }


    public function addTransactions( array $transactions ){

        $this->transactionRequests = array_merge($this->transactionRequests, $transactions);

    }

    public function popTransaction(){
        
        return array_pop($this->transactionRequests);

    }

    public function getRequests(){

        return $this->transactionRequests;

    }

}
