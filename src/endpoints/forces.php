<?php
namespace UKPM\Endpoints;

class Forces extends Base{
	
	public function list() {
		return $this->requestHandler->APICall("GET", "forces/list");
	}
}