<?php
namespace Justcy\Suning\Request\fws;
/**
 * 苏宁开放平台接口 - 上传(更新)检测报告
 *
 * @author suning
 * @date   2015-6-8
 */
class ReportModifyRequest  extends SuningRequest{
	
	/**
	 * 检测单号。由服务商自己填写的单号
	 */
	private $qtOrderCode;
	
	/**
	 * 报告代码。服务商自己填写
	 */
	private $qtCode;
	
	/**
	 * 订单行号。服务市场的订单详情号
	 */
	private $orderDetailId;
	
	/**
	 * 商品编码。由外部系统确定，检测服务上传过来，编码长度不一定
	 */
	private $itemCode;
	
	/**
	 * 商品名称。送检商品名称
	 */
	private $itemName;
	
	/**
	 * 商品描述。送件商品描述
	 */
	private $itemDesc;
	
	/**
	 * 检测类型。1：商品检测；2：第三方认证；4：大聚惠报名；
	 */
	private $qtType;
	
	/**
	 * 检测标准。服务商自己填写
	 */
	private $qtStandard;
	
	/**
	 * 报告文件。报告文件本身， 支持PDF/PNG/JPEG/JPG4种格式，大小限制在1M以内；如果检测状态为3，则必填
	 */
	private $qtFile;
	
	/**
	 * 报告名称。报告名称
	 */
	private $fileName;
	
	/**
	 * 报告失效日期。服务商填写，针对报告本身的有效期
	 */
	private $qtExpiry;
	
	/**
	 * 检测状态。0：尚未检测；1：收到样品；2：正在检测；3：报告完成；
	 */
	private $qtOrderStatus;
	
	/**
	 * 检测结果。1：合格；2：不合格；
	 */
	private $isPass;
	
	/**
	 * 检测结果描述。服务商自己填写，关于此次检测结果的描述
	 */
	private $described;
	
	/**
	 * 服务商备注。服务商自己填写，关于此次检测记录的备注
	 */
	private $memo;
	
	public function getQtOrderCode() {
		return $this->qtOrderCode;
	}
	
	public function setQtOrderCode($qtOrderCode) {
		$this->qtOrderCode = $qtOrderCode;
		$this->apiParams["qtOrderCode"] = $qtOrderCode;
	}
	
	public function getQtCode() {
		return $this->qtCode;
	}
	
	public function setQtCode($qtCode) {
		$this->qtCode = $qtCode;
		$this->apiParams["qtCode"] = $qtCode;
	}
	
	public function getOrderDetailId() {
		return $this->orderDetailId;
	}
	
	public function setOrderDetailId($orderDetailId) {
		$this->orderDetailId = $orderDetailId;
		$this->apiParams["orderDetailId"] = $orderDetailId;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getItemName() {
		return $this->itemName;
	}
	
	public function setItemName($itemName) {
		$this->itemName = $itemName;
		$this->apiParams["itemName"] = $itemName;
	}
	
	public function getItemDesc() {
		return $this->itemDesc;
	}
	
	public function setItemDesc($itemDesc) {
		$this->itemDesc = $itemDesc;
		$this->apiParams["itemDesc"] = $itemDesc;
	}
	
	public function getQtType() {
		return $this->qtType;
	}
	
	public function setQtType($qtType) {
		$this->qtType = $qtType;
		$this->apiParams["qtType"] = $qtType;
	}
	
	public function getQtStandard() {
		return $this->qtStandard;
	}
	
	public function setQtStandard($qtStandard) {
		$this->qtStandard = $qtStandard;
		$this->apiParams["qtStandard"] = $qtStandard;
	}
	
	public function getQtFile() {
		return $this->qtFile;
	}
	
	public function setQtFile($qtFile) {
		$this->qtFile = $qtFile;
		$this->apiParams["qtFile"] = $qtFile;
	}
	
	public function getFileName() {
		return $this->fileName;
	}
	
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		$this->apiParams["fileName"] = $fileName;
	}
	
	public function getQtExpiry() {
		return $this->qtExpiry;
	}
	
	public function setQtExpiry($qtExpiry) {
		$this->qtExpiry = $qtExpiry;
		$this->apiParams["qtExpiry"] = $qtExpiry;
	}
	
	public function getQtOrderStatus() {
		return $this->qtOrderStatus;
	}
	
	public function setQtOrderStatus($qtOrderStatus) {
		$this->qtOrderStatus = $qtOrderStatus;
		$this->apiParams["qtOrderStatus"] = $qtOrderStatus;
	}
	
	public function getIsPass() {
		return $this->isPass;
	}
	
	public function setIsPass($isPass) {
		$this->isPass = $isPass;
		$this->apiParams["isPass"] = $isPass;
	}
	
	public function getDescribed() {
		return $this->described;
	}
	
	public function setDescribed($described) {
		$this->described = $described;
		$this->apiParams["described"] = $described;
	}
	
	public function getMemo() {
		return $this->memo;
	}
	
	public function setMemo($memo) {
		$this->memo = $memo;
		$this->apiParams["memo"] = $memo;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.report.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->qtOrderCode, 'qtOrderCode');
		RequestCheckUtil::checkNotNull($this->qtCode, 'qtCode');
		RequestCheckUtil::checkNotNull($this->orderDetailId, 'orderDetailId');
		RequestCheckUtil::checkNotNull($this->itemCode, 'itemCode');
		RequestCheckUtil::checkNotNull($this->itemName, 'itemName');
		RequestCheckUtil::checkNotNull($this->qtType, 'qtType');
		RequestCheckUtil::checkNotNull($this->qtOrderStatus, 'qtOrderStatus');
		RequestCheckUtil::checkNotNull($this->isPass, 'isPass');
	}
	
	public function getBizName(){
		return "modifyReport";
	}
	
}

?>