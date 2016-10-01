<?php

use Lukasoppermann\Httpstatus\Httpstatuscodes; 
use Lukasoppermann\Testing\TestTrait; 

class TestCase extends Laravel\Lumen\Testing\TestCase implements Httpstatuscodes
{
    use TestTrait;
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    protected $client; 

    public function setUp()
    {
    	parent::setUp(); 

    	$this->client = new GuzzleHttp\Client([
    		'base_uri' => 'http://localhost:8000', 
    		'exceptions' => false, 
    	]); 
    }

    public function getResponseArray($response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }
    
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }
}
