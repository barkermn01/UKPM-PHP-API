<?php
namespace UKPM\Endpoints;

class Officers extends Base{
	
	public function getByForce(int $force_id) {
		$body = ["force_id" => $force_id];
		return $this->requestHandler->APICall("officers/force", $body);
	}
	
	public function getByRank(int $rank_id) {
		$body = ["rank_id" => $rank_id];
		return $this->requestHandler->APICall("officers/rank", $body);
	}
	
	public function getBySearchTerm(string $searchTerm) {
		$body = ["search_term" => $searchTerm];
		return $this->requestHandler->APICall("officers/search", $body);
	}
	
	public function getByDayInMonth(int $day, int $month) {
		$body = ["day" => $day, "month" => $month];
		return $this->requestHandler->APICall("officers/force", $body);
	}
	
}