<?php
namespace Justcy\Suning\Request\custom;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-25
 */
class ElectronicInvoiceAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $invoiceCode;
	
	/**
	 * 
	 */
	private $invoiceData;
	
	/**
	 * 
	 */
	private $invoiceNo;
	
	/**
	 * 
	 */
	private $invoiceTime;
	
	/**
	 * 
	 */
	private $invoiceType;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $productCode;
	
	public function getInvoiceCode() {
		return $this->invoiceCode;
	}
	
	public function setInvoiceCode($invoiceCode) {
		$this->invoiceCode = $invoiceCode;
		$this->apiParams["invoiceCode"] = $invoiceCode;
	}
	
	public function getInvoiceData() {
		return $this->invoiceData;
	}
	
	public function setInvoiceData($invoiceData) {
		$this->invoiceData = $invoiceData;
		$this->apiParams["invoiceData"] = $invoiceData;
	}
	
	public function getInvoiceNo() {
		return $this->invoiceNo;
	}
	
	public function setInvoiceNo($invoiceNo) {
		$this->invoiceNo = $invoiceNo;
		$this->apiParams["invoiceNo"] = $invoiceNo;
	}
	
	public function getInvoiceTime() {
		return $this->invoiceTime;
	}
	
	public function setInvoiceTime($invoiceTime) {
		$this->invoiceTime = $invoiceTime;
		$this->apiParams["invoiceTime"] = $invoiceTime;
	}
	
	public function getInvoiceType() {
		return $this->invoiceType;
	}
	
	public function setInvoiceType($invoiceType) {
		$this->invoiceType = $invoiceType;
		$this->apiParams["invoiceType"] = $invoiceType;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.electronicinvoice.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->invoiceCode, 'invoiceCode');
		RequestCheckUtil::checkNotNull($this->invoiceData, 'invoiceData');
		RequestCheckUtil::checkNotNull($this->invoiceNo, 'invoiceNo');
		RequestCheckUtil::checkNotNull($this->invoiceTime, 'invoiceTime');
		RequestCheckUtil::checkNotNull($this->invoiceType, 'invoiceType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "addElectronicInvoice";
	}
	
}

?>