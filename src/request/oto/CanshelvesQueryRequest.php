<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-16
 */
class CanshelvesQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $physicalCode;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $brandCode;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $itemCode;
	
	
	
	public function getPhysicalCode() {
		return $this->physicalCode;
	}
	
	public function setPhysicalCode($physicalCode) {
		$this->physicalCode = $physicalCode;
		$this->apiParams["physicalCode"] = $physicalCode;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.canshelves.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->physicalCode, 'physicalCode');
	}
	
	public function getBizName(){
		return "queryCanshelves";
	}
	
}

?>