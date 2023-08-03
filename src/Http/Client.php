<?php




namespace Thiio\Exigo\Http;

use Exception;
use GuzzleHttp\Client as GuzzleHttpClient;
use stdClass;
use Psr\Http\Message\ResponseInterface;



class Client
{

    protected $login;
    protected $password;
    protected $company;
    protected $env;
    protected $headers;
    protected $mainApiUrl;
    
    const PRODUCTION = "PRODUCTION";
    const SANDBOX    = "SANDBOX";
    const TIMEOUT    = 10000;

    
    protected $client;


    protected function __construct(
        string $login,
        string $password,
        string $company,
        string $mainApiUrl,
    ){
        $this->login        = $login;
        $this->password     = $password;
        $this->company      = $company;
        $this->mainApiUrl   = $mainApiUrl;
        $this->setDefaultHeaders();
    }

    public function setCompany(string $company){
        $this->company = $company;
    }

    public function getCompany(){
        return $this->company;
    }

    private function buildClient(){
        return new GuzzleHttpClient([
            'base_uri' => $this->mainApiUrl,
            'timeout'  => self::TIMEOUT,
            'headers'  => $this->getHeaders()
        ]);
    }

    /**DEPRECATED: We're now receiving the url as parameter**/
    // private function resolveMainUrl(){
    //     $company = strtolower($this->company);
    //     return "https://{$company}-api.exigo.com";
    // }

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
        $apiResponse          = new stdClass();
        $apiResponse->success = false;
        $apiResponse->msg     = "";
        $apiResponse->error   = null;
        $apiResponse->code    = $response->getStatusCode();
        
        if( $response->getStatusCode() !== 200 ){
            
            $apiResponse->error = $$response->getBody();
            $apiResponse->msg   = "Error Exigo Request";
            return $response;

        }

        $apiResponse->msg     = "Success Request";
        $apiResponse->success = true;
        $apiResponse->data    = json_decode($response->getBody());
        return $apiResponse; 
    }


    private function handleErrorResponse(Exception $e){
        $apiResponse            = new stdClass();
        $apiResponse->success   = false;
        $apiResponse->msg       = $e->getMessage();
        $apiResponse->exception = $e->getTrace();
        $apiResponse->code      = 500;
        return $apiResponse;

    }


  



}
