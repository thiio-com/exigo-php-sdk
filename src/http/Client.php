<?php




namespace Thiio\Exigo\Http;

use Exception;
use Exceptions\ExigoRequestException;
use GuzzleHttp\Client as GuzzleHttpClient;
use Psr\Http\Message\ResponseInterface;
use stdClass;
use Thiio\Exigo\Requests\CalculateOrder;
use Thiio\Exigo\Abstract\Endpoints;


use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

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


    protected function __construct(string $login, string $password, string $company, string $env = "PRODUCTION"){
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
        return "https://{$company}-api.exigo.com";
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


    protected function makeRequest( string $verb, $url, $data = [] ){
        
        try {
            
            $client = $this->buildClient();

            
            $response = $client->request($verb, $url, $data);
            
            return $this->handleResponse($response);
            

        } catch (\Exception $e) {
            

            return $this->handleErrorResponse($e);

        }

    }

    private function handleResponse(ResponseInterface $response){
        $this->log("good");
        $apiResponse          = new stdClass();
        $apiResponse->success = false;
        $apiResponse->msg     = "";
        $apiResponse->error   = null;
        
        if( $response->getStatusCode() !== 200 ){
            
            $apiResponse->error = $$response->getBody();
            $apiResponse->msg   = "Error Exigo Request";
            return $response;

        }

        $apiResponse->msg     = "Success Request";
        $apiResponse->success = true;
        $apiResponse->data    = json_decode($response->getBody());
        $this->log($apiResponse);
        return $apiResponse; 
    }


    private function handleErrorResponse(Exception $e){
        $this->log("bad");
        $this->log($e->getMessage());
        $apiResponse            = new stdClass();
        $apiResponse->success   = false;
        $apiResponse->msg       = $e->getMessage();
        $apiResponse->exception = $e->getTrace();
        $this->log($apiResponse);
        return $apiResponse;

    }


    public function log($data){
        $logger = new Logger('my_logger');
        // Now add some handlers
        $logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Level::Debug));
        $logger->pushHandler(new FirePHPHandler());
        $message = json_encode($data);
        $logger->info($message);

    }



}
