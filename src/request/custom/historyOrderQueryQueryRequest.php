<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class historyOrderQueryQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $endTime;
	
	
	
	/**
	 * 
	 */
	private $startTime;
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.historyorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
	}
	
	public function getBizName(){
		return "historyOrderQuery";
	}
	
}

?>