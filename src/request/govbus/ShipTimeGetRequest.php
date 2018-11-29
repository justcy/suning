<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class ShipTimeGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $districtId;
	
	/**
	 * 
	 */
	private $townId;
	
	/**
	 * 
	 */
	private $addrDetail;
	
	/**
	 * 
	 */
	private $skuIds;
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getDistrictId() {
		return $this->districtId;
	}
	
	public function setDistrictId($districtId) {
		$this->districtId = $districtId;
		$this->apiParams["districtId"] = $districtId;
	}
	
	public function getTownId() {
		return $this->townId;
	}
	
	public function setTownId($townId) {
		$this->townId = $townId;
		$this->apiParams["townId"] = $townId;
	}
	
	public function getAddrDetail() {
		return $this->addrDetail;
	}
	
	public function setAddrDetail($addrDetail) {
		$this->addrDetail = $addrDetail;
		$this->apiParams["addrDetail"] = $addrDetail;
	}
	
	public function getSkuIds() {
		return $this->skuIds;
	}
	
	public function setSkuIds($skuIds) {
		$this->skuIds = $skuIds;
		$arr = array();
		foreach ($skuIds as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skuIds"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.shiptime.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->districtId, 'districtId');
		RequestCheckUtil::checkNotNull($this->addrDetail, 'addrDetail');
	}
	
	public function getBizName(){
		return "getShipTime";
	}
	
}

class SkuIds {

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