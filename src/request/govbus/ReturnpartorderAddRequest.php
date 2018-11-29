<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-11-15
 */
class ReturnpartorderAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $skus;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getSkus() {
		return $this->skus;
	}
	
	public function setSkus($skus) {
		$this->skus = $skus;
		$arr = array();
		foreach ($skus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skus"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.returnpartorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "addReturnpartorder";
	}
	
}

class Skus {

	private $apiParams = array();
	
	private $num;
	
	private $skuId;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>