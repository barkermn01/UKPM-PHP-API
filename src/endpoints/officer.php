<?php
namespace UKPM\Endpoints;

class Officer extends Base{
	
	public function get(int $officer_id) {
		$body = ["officer_id" => $officer_id];
		return $this->requestHandler->APICall("POST", "officer/get", $body);
	}
}