<?php
namespace Justcy\Suning\Request\selfmarket;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-9-11
 */
class OrderGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.order.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "getOrder";
	}
	
}

?>