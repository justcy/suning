<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-2-17
 */
class DisagreerefundModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $notReason;
	
	/**
	 * 
	 */
	private $omsOrderItemNo;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getNotReason() {
		return $this->notReason;
	}
	
	public function setNotReason($notReason) {
		$this->notReason = $notReason;
		$this->apiParams["notReason"] = $notReason;
	}
	
	public function getOmsOrderItemNo() {
		return $this->omsOrderItemNo;
	}
	
	public function setOmsOrderItemNo($omsOrderItemNo) {
		$this->omsOrderItemNo = $omsOrderItemNo;
		$this->apiParams["omsOrderItemNo"] = $omsOrderItemNo;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.disagreerefund.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->notReason, 'notReason');
		RequestCheckUtil::checkNotNull($this->omsOrderItemNo, 'omsOrderItemNo');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "modifyDisagreerefund";
	}
	
}

?>