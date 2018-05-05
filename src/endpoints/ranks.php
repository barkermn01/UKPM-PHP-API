<?php
namespace UKPM\Endpoints;

class Ranks extends Base{
	
	public function list() {
		return $this->requestHandler->APICall("ranks/list");
	}
}