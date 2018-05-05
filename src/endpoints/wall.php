<?php
namespace UKPM\Endpoints;

class Wall extends Base{
	
	public function get() {
		return $this->requestHandler->APICall("wall/get");
	}
}