<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class OrderUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getApiMethodName(){
		return 'suning.online.order.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
	}
	
	public function getBizName(){
		return "updateOrder";
	}
	
}

?>