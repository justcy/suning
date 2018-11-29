<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-11
 */
class MylibarybatchQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $status;
	
	/**
	 * 
	 */
	private $startTime;
	
	/**
	 * 
	 */
	private $endTime;
	
	
	
	
	
	
	
	
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	
	
	
	
	
	
	
	
	public function getApiMethodName(){
		return 'suning.saleoff.mylibarybatch.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->status, 'status');
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryMylibarybatch";
	}
	
}

?>