<?php




namespace Thiio\Exigo\Http;

use Exception;
use Exceptions\ExigoRequestException;
use GuzzleHttp\Client as GuzzleHttpClient;
use Psr\Http\Message\ResponseInterface;
use stdClass;
use Thiio\Exigo\Requests\CalculateOrder;
use Thiio\Exigo\Abstract\Endpoints;

// $exigoClient = new Client();
// $response = $exigoClient->calculateOrder($order);

class Client
{

    protected $login;
    protected $password;
    protected $company;
    protected $env;
    protected $headers;
    
    const PRODUCTION = "PRODUCTION";
    const SANDBOX    = "SANDBOX";
    const TIMEOUT    = 10000;

    
    
    protected $client;

    public function __construct(string $login, string $password, string $company, string $env = "PRODUCTION"){
        if( ! $this->validEnv($env) ) throw new Exception("$env is invalid");
        $this->login    = $login;
        $this->password = $password;
        $this->company  = $company;
        $this->env      = $env;
        $this->setDefaultHeaders();
        
    }

    private function validEnv( string $env ){
        if( ! in_array($env, [self::PRODUCTION, self::SANDBOX]) ) return false;
        return true;
    }

    public function setCompany(string $company){
        $this->company = $company;
    }

    public function getCompany(){
        return $this->company;
    }


    private function buildClient(){
        return new GuzzleHttpClient([
            'base_uri' => $this->resolveMainUrl(),
            'timeout'  => self::TIMEOUT,
            'headers'  => $this->getHeaders()
        ]);
    }

    private function resolveMainUrl(){
        $company = strtolower($this->company);
        return "https://{$company}-api.exigo.com/3.0";
    }

    private function setDefaultHeaders(){
        $encodedToken  = $this->fetchToken();
        $this->headers = [
            "Content-Type"  => "application/json",
            "Authorization" => "Basic {$encodedToken}"
        ];
        return $this;
    }

    public function setHeaders($headers){
        
        $this->headers = $headers;
    
    }   

    public function getHeaders(){

        return $this->headers;

    }

    private function fetchToken(){
        
        return base64_encode("{$this->login}@{$this->company}:{$this->password}");
        
    }

    
    public function calculateOrder( CalculateOrder $order, string $method = "POST", array $data = [] ){
        
        return $this->makeRequest($method, $order::ENDPOINT, $order->toArray() );

    }

    private function makeRequest( string $verb, $url, $data = [] ){
        
        try {
            
            $client = $this->buildClient();

            $response = $client->request($verb, $url, $data);

            $this->handleResponse($response);
            

        } catch (\Exception $e) {
            
            //$this->handleErrorResponse($e);
            var_dump($e);

        }

    }

    private function handleResponse(ResponseInterface $response){
        $data = new stdClass();
        $data->success = false;
        $data->msg     = "";
        $data->error   = null;
        if( $response->getStatusCode() !== 200 ){
            $data->error = $$response->getBody();
            $data->msg = "Error Exigo Request";
            return $response;
        }
        $data->success = true;
        $data->data = $response->getBody();
        return $data; 
    }



}
