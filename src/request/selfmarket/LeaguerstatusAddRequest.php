<?php
namespace Justcy\Suning\Request\selfmarket;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class LeaguerstatusAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $iqStatus;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getIqStatus() {
		return $this->iqStatus;
	}
	
	public function setIqStatus($iqStatus) {
		$this->iqStatus = $iqStatus;
		$this->apiParams["iqStatus"] = $iqStatus;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.leaguerstatus.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->iqStatus, 'iqStatus');
	}
	
	public function getBizName(){
		return "addLeaguerstatus";
	}
	
}

?>