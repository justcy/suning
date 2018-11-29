<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-23
 */
class PriceModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.price.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->price, 'price');
	}
	
	public function getBizName(){
		return "modifyPrice";
	}
	
}

?>