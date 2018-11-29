<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-3
 */
class RefundordersQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderNo;
	
	/**
	 * 
	 */
	private $orderItemNo;
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $appId;
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getOrderItemNo() {
		return $this->orderItemNo;
	}
	
	public function setOrderItemNo($orderItemNo) {
		$this->orderItemNo = $orderItemNo;
		$this->apiParams["orderItemNo"] = $orderItemNo;
	}
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.refundorders.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
		RequestCheckUtil::checkNotNull($this->orderItemNo, 'orderItemNo');
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "queryRefundorders";
	}
	
}

?>