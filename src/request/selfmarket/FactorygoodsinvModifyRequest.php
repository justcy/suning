<?php
namespace Justcy\Suning\Request\selfmarket;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-20
 */
class FactorygoodsinvModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $goodsList;
	
	public function getGoodsList() {
		return $this->goodsList;
	}
	
	public function setGoodsList($goodsList) {
		$this->goodsList = $goodsList;
		$arr = array();
		foreach ($goodsList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["goodsList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.factorygoodsinv.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "modifyFactorygoodsinv";
	}
	
}

class GoodsList {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $invQty;
	
	private $supplierCommodityCode;
	
	private $warehouseCode;
	
	private $warehouseLocation;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getInvQty() {
		return $this->invQty;
	}

	public function setInvQty($invQty) {
		$this->invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}
	
	public function getSupplierCommodityCode() {
		return $this->supplierCommodityCode;
	}

	public function setSupplierCommodityCode($supplierCommodityCode) {
		$this->supplierCommodityCode = $supplierCommodityCode;
		$this->apiParams["supplierCommodityCode"] = $supplierCommodityCode;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}

	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getWarehouseLocation() {
		return $this->warehouseLocation;
	}

	public function setWarehouseLocation($warehouseLocation) {
		$this->warehouseLocation = $warehouseLocation;
		$this->apiParams["warehouseLocation"] = $warehouseLocation;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>