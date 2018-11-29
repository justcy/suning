<?php
namespace Justcy\Suning\Request\integrate;
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-3-23
 */
class itemContentsAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $afterSaleServiceDec;
	
	/**
	 * 
	 */
	private $alertQty;
	
	/**
	 * 
	 */
	private $assortCode;
	
	/**
	 * 
	 */
	private $autoRefund;
	
	/**
	 * 
	 */
	private $bookingShop;
	
	/**
	 * 
	 */
	private $childItem;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	/**
	 * 
	 */
	private $deductiblePrice;
	
	/**
	 * 
	 */
	private $detailModule;
	
	/**
	 * 
	 */
	private $effectiveDay;
	
	/**
	 * 
	 */
	private $extractMode;
	
	/**
	 * 
	 */
	private $insaleRefund;
	
	/**
	 * 
	 */
	private $introduction;
	
	/**
	 * 
	 */
	private $invQty;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $mobile;
	
	/**
	 * 
	 */
	private $mobileNew;
	
	/**
	 * 
	 */
	private $packingList;
	
	/**
	 * 
	 */
	private $payTemplate;
	
	/**
	 * 
	 */
	private $peopleNum;
	
	/**
	 * 
	 */
	private $pingouPrice;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $priceType;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $saleDate;
	
	/**
	 * 
	 */
	private $saleSet;
	
	/**
	 * 
	 */
	private $sellChannel;
	
	/**
	 * 
	 */
	private $sellPoint;
	
	/**
	 * 
	 */
	private $sourceCountry;
	
	/**
	 * 
	 */
	private $supplierImg10Url;
	
	/**
	 * 
	 */
	private $supplierImg1Url;
	
	/**
	 * 
	 */
	private $supplierImg2Url;
	
	/**
	 * 
	 */
	private $supplierImg3Url;
	
	/**
	 * 
	 */
	private $supplierImg4Url;
	
	/**
	 * 
	 */
	private $supplierImg5Url;
	
	/**
	 * 
	 */
	private $supplierImg6Url;
	
	/**
	 * 
	 */
	private $supplierImg7Url;
	
	/**
	 * 
	 */
	private $supplierImg8Url;
	
	/**
	 * 
	 */
	private $supplierImg9Url;
	
	/**
	 * 
	 */
	private $whiteBackgroundPic;
	
	/**
	 * 
	 */
	private $writeoffPayment;
	
	/**
	 * 
	 */
	private $writeoffShop;
	
	public function getAfterSaleServiceDec() {
		return $this->afterSaleServiceDec;
	}
	
	public function setAfterSaleServiceDec($afterSaleServiceDec) {
		$this->afterSaleServiceDec = $afterSaleServiceDec;
		$this->apiParams["afterSaleServiceDec"] = $afterSaleServiceDec;
	}
	
	public function getAlertQty() {
		return $this->alertQty;
	}
	
	public function setAlertQty($alertQty) {
		$this->alertQty = $alertQty;
		$this->apiParams["alertQty"] = $alertQty;
	}
	
	public function getAssortCode() {
		return $this->assortCode;
	}
	
	public function setAssortCode($assortCode) {
		$this->assortCode = $assortCode;
		$this->apiParams["assortCode"] = $assortCode;
	}
	
	public function getAutoRefund() {
		return $this->autoRefund;
	}
	
	public function setAutoRefund($autoRefund) {
		$this->autoRefund = $autoRefund;
		$this->apiParams["autoRefund"] = $autoRefund;
	}
	
	public function getBookingShop() {
		return $this->bookingShop;
	}
	
	public function setBookingShop($bookingShop) {
		$this->bookingShop = $bookingShop;
		$this->apiParams["bookingShop"] = $bookingShop;
	}
	
	public function getChildItem() {
		return $this->childItem;
	}
	
	public function setChildItem($childItem) {
		$this->childItem = $childItem;
		$arr = array();
		foreach ($childItem as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childItem"] = $arr;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getDeductiblePrice() {
		return $this->deductiblePrice;
	}
	
	public function setDeductiblePrice($deductiblePrice) {
		$this->deductiblePrice = $deductiblePrice;
		$this->apiParams["deductiblePrice"] = $deductiblePrice;
	}
	
	public function getDetailModule() {
		return $this->detailModule;
	}
	
	public function setDetailModule($detailModule) {
		$this->detailModule = $detailModule;
		$arr = array();
		foreach ($detailModule as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["detailModule"] = $arr;
	}
	
	public function getEffectiveDay() {
		return $this->effectiveDay;
	}
	
	public function setEffectiveDay($effectiveDay) {
		$this->effectiveDay = $effectiveDay;
		$this->apiParams["effectiveDay"] = $effectiveDay;
	}
	
	public function getExtractMode() {
		return $this->extractMode;
	}
	
	public function setExtractMode($extractMode) {
		$this->extractMode = $extractMode;
		$this->apiParams["extractMode"] = $extractMode;
	}
	
	public function getInsaleRefund() {
		return $this->insaleRefund;
	}
	
	public function setInsaleRefund($insaleRefund) {
		$this->insaleRefund = $insaleRefund;
		$this->apiParams["insaleRefund"] = $insaleRefund;
	}
	
	public function getIntroduction() {
		return $this->introduction;
	}
	
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
	}
	
	public function getInvQty() {
		return $this->invQty;
	}
	
	public function setInvQty($invQty) {
		$this->invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getMobile() {
		return $this->mobile;
	}
	
	public function setMobile($mobile) {
		$this->mobile = $mobile;
		$this->apiParams["mobile"] = $mobile->getApiParams();
	}
	
	public function getMobileNew() {
		return $this->mobileNew;
	}
	
	public function setMobileNew($mobileNew) {
		$this->mobileNew = $mobileNew;
		$this->apiParams["mobileNew"] = $mobileNew->getApiParams();
	}
	
	public function getPackingList() {
		return $this->packingList;
	}
	
	public function setPackingList($packingList) {
		$this->packingList = $packingList;
		$arr = array();
		foreach ($packingList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["packingList"] = $arr;
	}
	
	public function getPayTemplate() {
		return $this->payTemplate;
	}
	
	public function setPayTemplate($payTemplate) {
		$this->payTemplate = $payTemplate;
		$this->apiParams["payTemplate"] = $payTemplate;
	}
	
	public function getPeopleNum() {
		return $this->peopleNum;
	}
	
	public function setPeopleNum($peopleNum) {
		$this->peopleNum = $peopleNum;
		$this->apiParams["peopleNum"] = $peopleNum;
	}
	
	public function getPingouPrice() {
		return $this->pingouPrice;
	}
	
	public function setPingouPrice($pingouPrice) {
		$this->pingouPrice = $pingouPrice;
		$this->apiParams["pingouPrice"] = $pingouPrice;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getPriceType() {
		return $this->priceType;
	}
	
	public function setPriceType($priceType) {
		$this->priceType = $priceType;
		$this->apiParams["priceType"] = $priceType;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSaleDate() {
		return $this->saleDate;
	}
	
	public function setSaleDate($saleDate) {
		$this->saleDate = $saleDate;
		$this->apiParams["saleDate"] = $saleDate;
	}
	
	public function getSaleSet() {
		return $this->saleSet;
	}
	
	public function setSaleSet($saleSet) {
		$this->saleSet = $saleSet;
		$this->apiParams["saleSet"] = $saleSet;
	}
	
	public function getSellChannel() {
		return $this->sellChannel;
	}
	
	public function setSellChannel($sellChannel) {
		$this->sellChannel = $sellChannel;
		$this->apiParams["sellChannel"] = $sellChannel;
	}
	
	public function getSellPoint() {
		return $this->sellPoint;
	}
	
	public function setSellPoint($sellPoint) {
		$this->sellPoint = $sellPoint;
		$this->apiParams["sellPoint"] = $sellPoint;
	}
	
	public function getSourceCountry() {
		return $this->sourceCountry;
	}
	
	public function setSourceCountry($sourceCountry) {
		$this->sourceCountry = $sourceCountry;
		$this->apiParams["sourceCountry"] = $sourceCountry;
	}
	
	public function getSupplierImg10Url() {
		return $this->supplierImg10Url;
	}
	
	public function setSupplierImg10Url($supplierImg10Url) {
		$this->supplierImg10Url = $supplierImg10Url;
		$this->apiParams["supplierImg10Url"] = $supplierImg10Url;
	}
	
	public function getSupplierImg1Url() {
		return $this->supplierImg1Url;
	}
	
	public function setSupplierImg1Url($supplierImg1Url) {
		$this->supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}
	
	public function getSupplierImg2Url() {
		return $this->supplierImg2Url;
	}
	
	public function setSupplierImg2Url($supplierImg2Url) {
		$this->supplierImg2Url = $supplierImg2Url;
		$this->apiParams["supplierImg2Url"] = $supplierImg2Url;
	}
	
	public function getSupplierImg3Url() {
		return $this->supplierImg3Url;
	}
	
	public function setSupplierImg3Url($supplierImg3Url) {
		$this->supplierImg3Url = $supplierImg3Url;
		$this->apiParams["supplierImg3Url"] = $supplierImg3Url;
	}
	
	public function getSupplierImg4Url() {
		return $this->supplierImg4Url;
	}
	
	public function setSupplierImg4Url($supplierImg4Url) {
		$this->supplierImg4Url = $supplierImg4Url;
		$this->apiParams["supplierImg4Url"] = $supplierImg4Url;
	}
	
	public function getSupplierImg5Url() {
		return $this->supplierImg5Url;
	}
	
	public function setSupplierImg5Url($supplierImg5Url) {
		$this->supplierImg5Url = $supplierImg5Url;
		$this->apiParams["supplierImg5Url"] = $supplierImg5Url;
	}
	
	public function getSupplierImg6Url() {
		return $this->supplierImg6Url;
	}
	
	public function setSupplierImg6Url($supplierImg6Url) {
		$this->supplierImg6Url = $supplierImg6Url;
		$this->apiParams["supplierImg6Url"] = $supplierImg6Url;
	}
	
	public function getSupplierImg7Url() {
		return $this->supplierImg7Url;
	}
	
	public function setSupplierImg7Url($supplierImg7Url) {
		$this->supplierImg7Url = $supplierImg7Url;
		$this->apiParams["supplierImg7Url"] = $supplierImg7Url;
	}
	
	public function getSupplierImg8Url() {
		return $this->supplierImg8Url;
	}
	
	public function setSupplierImg8Url($supplierImg8Url) {
		$this->supplierImg8Url = $supplierImg8Url;
		$this->apiParams["supplierImg8Url"] = $supplierImg8Url;
	}
	
	public function getSupplierImg9Url() {
		return $this->supplierImg9Url;
	}
	
	public function setSupplierImg9Url($supplierImg9Url) {
		$this->supplierImg9Url = $supplierImg9Url;
		$this->apiParams["supplierImg9Url"] = $supplierImg9Url;
	}
	
	public function getWhiteBackgroundPic() {
		return $this->whiteBackgroundPic;
	}
	
	public function setWhiteBackgroundPic($whiteBackgroundPic) {
		$this->whiteBackgroundPic = $whiteBackgroundPic;
		$this->apiParams["whiteBackgroundPic"] = $whiteBackgroundPic;
	}
	
	public function getWriteoffPayment() {
		return $this->writeoffPayment;
	}
	
	public function setWriteoffPayment($writeoffPayment) {
		$this->writeoffPayment = $writeoffPayment;
		$this->apiParams["writeoffPayment"] = $writeoffPayment;
	}
	
	public function getWriteoffShop() {
		return $this->writeoffShop;
	}
	
	public function setWriteoffShop($writeoffShop) {
		$this->writeoffShop = $writeoffShop;
		$this->apiParams["writeoffShop"] = $writeoffShop;
	}
	
	public function getApiMethodName(){
		return 'suning.integrate.itemcontents.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cmTitle, 'cmTitle');
		RequestCheckUtil::checkNotNull($this->peopleNum, 'peopleNum');
		RequestCheckUtil::checkNotNull($this->pingouPrice, 'pingouPrice');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->saleSet, 'saleSet');
		RequestCheckUtil::checkNotNull($this->supplierImg1Url, 'supplierImg1Url');
		RequestCheckUtil::checkNotNull($this->supplierImg2Url, 'supplierImg2Url');
		RequestCheckUtil::checkNotNull($this->supplierImg3Url, 'supplierImg3Url');
		RequestCheckUtil::checkNotNull($this->supplierImg4Url, 'supplierImg4Url');
		RequestCheckUtil::checkNotNull($this->supplierImg5Url, 'supplierImg5Url');
		RequestCheckUtil::checkNotNull($this->whiteBackgroundPic, 'whiteBackgroundPic');
	}
	
	public function getBizName(){
		return "itemContents";
	}
	
}

class ListInfo {

	private $apiParams = array();
	
	private $num;
	
	private $pic;
	
	private $text;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getPic() {
		return $this->pic;
	}

	public function setPic($pic) {
		$this->pic = $pic;
		$this->apiParams["pic"] = $pic;
	}
	
	public function getText() {
		return $this->text;
	}

	public function setText($text) {
		$this->text = $text;
		$this->apiParams["text"] = $text;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Module {

	private $apiParams = array();
	
	private $couponId;
	
	private $imgUrl;
	
	private $moduleName;
	
	private $moduleStatus;
	
	private $tuijianId;
	
	public function getCouponId() {
		return $this->couponId;
	}

	public function setCouponId($couponId) {
		$this->couponId = $couponId;
		$this->apiParams["couponId"] = $couponId;
	}
	
	public function getImgUrl() {
		return $this->imgUrl;
	}

	public function setImgUrl($imgUrl) {
		$this->imgUrl = $imgUrl;
		$this->apiParams["imgUrl"] = $imgUrl;
	}
	
	public function getModuleName() {
		return $this->moduleName;
	}

	public function setModuleName($moduleName) {
		$this->moduleName = $moduleName;
		$this->apiParams["moduleName"] = $moduleName;
	}
	
	public function getModuleStatus() {
		return $this->moduleStatus;
	}

	public function setModuleStatus($moduleStatus) {
		$this->moduleStatus = $moduleStatus;
		$this->apiParams["moduleStatus"] = $moduleStatus;
	}
	
	public function getTuijianId() {
		return $this->tuijianId;
	}

	public function setTuijianId($tuijianId) {
		$this->tuijianId = $tuijianId;
		$this->apiParams["tuijianId"] = $tuijianId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class DetailModule {

	private $apiParams = array();
	
	private $content;
	
	private $moduleId;
	
	private $moduleName;
	
	private $num;
	
	private $type;
	
	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getModuleId() {
		return $this->moduleId;
	}

	public function setModuleId($moduleId) {
		$this->moduleId = $moduleId;
		$this->apiParams["moduleId"] = $moduleId;
	}
	
	public function getModuleName() {
		return $this->moduleName;
	}

	public function setModuleName($moduleName) {
		$this->moduleName = $moduleName;
		$this->apiParams["moduleName"] = $moduleName;
	}
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PackingList {

	private $apiParams = array();
	
	private $packingListName;
	
	private $packingListQty;
	
	public function getPackingListName() {
		return $this->packingListName;
	}

	public function setPackingListName($packingListName) {
		$this->packingListName = $packingListName;
		$this->apiParams["packingListName"] = $packingListName;
	}
	
	public function getPackingListQty() {
		return $this->packingListQty;
	}

	public function setPackingListQty($packingListQty) {
		$this->packingListQty = $packingListQty;
		$this->apiParams["packingListQty"] = $packingListQty;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class MobileNew {

	private $apiParams = array();
	
	private $module;
	
	public function getModule() {
		return $this->module;
	}

	public function setModule($module) {
		$this->module = $module;
		$arr = array();
		foreach ($module as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["module"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ChildItem {

	private $apiParams = array();
	
	private $alertQty;
	
	private $deductiblePriceChild;
	
	private $invQty;
	
	private $itemCode;
	
	private $pingouPriceSub;
	
	private $price;
	
	private $productCode;
	
	private $supplierImg1Url;
	
	public function getAlertQty() {
		return $this->alertQty;
	}

	public function setAlertQty($alertQty) {
		$this->alertQty = $alertQty;
		$this->apiParams["alertQty"] = $alertQty;
	}
	
	public function getDeductiblePriceChild() {
		return $this->deductiblePriceChild;
	}

	public function setDeductiblePriceChild($deductiblePriceChild) {
		$this->deductiblePriceChild = $deductiblePriceChild;
		$this->apiParams["deductiblePriceChild"] = $deductiblePriceChild;
	}
	
	public function getInvQty() {
		return $this->invQty;
	}

	public function setInvQty($invQty) {
		$this->invQty = $invQty;
		$this->apiParams["invQty"] = $invQty;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getPingouPriceSub() {
		return $this->pingouPriceSub;
	}

	public function setPingouPriceSub($pingouPriceSub) {
		$this->pingouPriceSub = $pingouPriceSub;
		$this->apiParams["pingouPriceSub"] = $pingouPriceSub;
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
	
	public function getSupplierImg1Url() {
		return $this->supplierImg1Url;
	}

	public function setSupplierImg1Url($supplierImg1Url) {
		$this->supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Mobile {

	private $apiParams = array();
	
	private $listInfo;
	
	private $summary;
	
	public function getListInfo() {
		return $this->listInfo;
	}

	public function setListInfo($listInfo) {
		$this->listInfo = $listInfo;
		$arr = array();
		foreach ($listInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["listInfo"] = $arr;
	}
	
	public function getSummary() {
		return $this->summary;
	}

	public function setSummary($summary) {
		$this->summary = $summary;
		$this->apiParams["summary"] = $summary;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>