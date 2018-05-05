<?php
namespace UKPM\Endpoints;

class Base {
	protected $requestHandler;
	
	public function __construct(\UKPM\Request $requester) {
		$this->requestHandler = $requester;
	}
}