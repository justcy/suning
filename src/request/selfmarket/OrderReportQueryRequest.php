<?php
namespace Justcy\Suning\Request\selfmarket;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-5-25
 */
class OrderReportQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $orderType;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.purchaseorderreport.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "queryOrderReport";
	}
	
}

?>