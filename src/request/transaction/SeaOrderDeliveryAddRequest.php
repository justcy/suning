<?php
/**
 * 苏宁开放平台接口 - 订单发货（海外购）
 *
 * @author suning
 * @date   2015-2-3
 */
class SeaOrderDeliveryAddRequest  extends SuningRequest{
	
	/**
	 * 订单号。
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $deliveryDetails;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getDeliveryDetails() {
		return $this->deliveryDetails;
	}
	
	public function setDeliveryDetails($deliveryDetails) {
		$this->deliveryDetails = $deliveryDetails;
		$arr = array();
		foreach ($deliveryDetails as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["deliveryDetails"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.seaorderdelivery.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->deliveryDetails, 'deliveryDetails');
	}
	
	public function getBizName(){
		return "seaOrderDelivery";
	}
	
}

class DeliveryDetails {

	private $apiParams = array();
	
	private $orderLineNumber;
	
	private $expressCompanyCode;
	
	private $expressNo;
	
	private $deliveryType;
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}

	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}

	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getDeliveryType() {
		return $this->deliveryType;
	}

	public function setDeliveryType($deliveryType) {
		$this->deliveryType = $deliveryType;
		$this->apiParams["deliveryType"] = $deliveryType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>