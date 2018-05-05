<?php
namespace UKPM\Endpoints;

class Test extends Base{
	
	public function get() {
		return $this->requestHandler->APICall("test/test");
	}
}