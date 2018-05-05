<?php
namespace UKPM;

class Client{
	
	private 
		// holds the binary version of the public key
		$public,
		// holds the binary version of the secret key
		$secret;
		
	public function __construct(string $public, string $secret){
		$this->public = hex2bin($public);
		$this->secret = hex2bin($secret);		
	}
	
	public function GetKeyPair() {
		return sodium_crypto_box_keypair_from_secretkey_and_publickey($this->secret, $this->public);
	}
	
	public function getPublic() {
		return bin2hex($this->public);
	}
	
	public function getPrivate() {
		return bin2hex($this->secret);
	}
}