<?php
namespace Justcy\Suning\Request\govbus;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-3-16
 */
class PriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $skus;
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
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
		return 'suning.govbus.price.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
	}
	
	public function getBizName(){
		return "queryPrice";
	}
	
}

class Skus {

	private $apiParams = array();
	
	private $skuId;
	
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