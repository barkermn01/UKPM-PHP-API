<?php
namespace UKPM;

class Connector{
	private 
		$endpoints;

	public 
		$forces,
		$officer,
		$officers,
		$ranks,
		$wall,
		$test;
	
	public function __construct(\UKPM\Client $client){
		$requestHandler = new \UKPM\Request($client);	
		
		$this->forces = new Endpoints\Forces($requestHandler);
		$this->officer = new Endpoints\Officer($requestHandler);
		$this->officers = new Endpoints\Officers($requestHandler);
		$this->ranks = new Endpoints\Ranks($requestHandler);
		$this->wall = new Endpoints\Wall($requestHandler);
		$this->test = new Endpoints\Test($requestHandler);
	}
}