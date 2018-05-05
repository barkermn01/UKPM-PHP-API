<?php
namespace UKPM;

use GuzzleHttp\Client;

class Request{
	private 
			$guzzle,
			$client;
	
	public function __construct(\UKPM\Client $client,bool  $dev = false) {
		$hostname = "https://api.ukpolicememorial.com/";
		if($dev){
			$hostname = "https://ukpm_api.intortuscs.co.uk/";
		}
		$this->guzzle = new Client([
			'base_uri' => $hostname,
			'timeout'  => 10.0,
			'verify' => false
		]);
		$this->client = $client;
	}
	
	private function getMessage(string $encrypted) {
		$hex = explode("h", $encrypted);
		$n = hex2bin($hex[0]);
		$msg = hex2bin($hex[1]);
		return sodium_crypto_box_open($msg, $n, $this->client->GetKeyPair());
	}
	
	public function APICall(string $endpoint, array $body = []) {
		$body['client_key'] = $this->client->getPublic();
				
		$response = $this->guzzle->request("POST", $endpoint, ['form_params' => $body]);
		
		$responseBody = $response->getBody()->getContents();
		$json = json_decode($responseBody);
		if($json){
			throw new \Exception("API Call Failed server said: {$json->reason}");
		}
		$decrypted = $this->getMessage($responseBody);
		return json_decode($decrypted);
	}
}