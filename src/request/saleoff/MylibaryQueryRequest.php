<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class MylibaryQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $productName;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}
	
	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.mylibary.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryMylibary";
	}
	
}

?>