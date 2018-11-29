<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-3
 */
class OrderpaymentConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
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
	private $orderNo;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
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
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.orderpayment.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
	}
	
	public function getBizName(){
		return "confirmOrderpayment";
	}
	
}

?>