<?php
/**
 * 苏宁开放平台接口 - 单笔获取销售报表
 *
 * @author suning
 * @date   2015-12-14
 */
class SaleFormGetRequest  extends SuningRequest{
	
	/**
	 * 苏宁品牌编码，9位数字
	 */
	private $brandCode;
	
	/**
	 * 串码。
	 */
	private $imei;
	
	public function getBrandCode() {
		return $this->brandCode;
	}
	
	public function setBrandCode($brandCode) {
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}
	
	public function getImei() {
		return $this->imei;
	}
	
	public function setImei($imei) {
		$this->imei = $imei;
		$this->apiParams["imei"] = $imei;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.saleform.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->imei, 'imei');
	}
	
	public function getBizName(){
		return "getSaleForm";
	}
	
}

?>