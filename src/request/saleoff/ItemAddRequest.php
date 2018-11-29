<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-9
 */
class ItemAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $supplierImg3Url;
	
	/**
	 * 
	 */
	private $categoryCode;
	
	/**
	 * 
	 */
	private $sellPoint;
	
	/**
	 * 
	 */
	private $supplierImg2Url;
	
	/**
	 * 
	 */
	private $supplierImg5Url;
	
	/**
	 * 
	 */
	private $barpic;
	
	/**
	 * 
	 */
	private $cmTitle;
	
	/**
	 * 
	 */
	private $supplierImg1Url;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $supplierImg4Url;
	
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
	private $introduction;
	
	/**
	 * 
	 */
	private $itemCode;
	
	/**
	 * 
	 */
	private $childItem;
	
	/**
	 * 
	 */
	private $pars;
	
	/**
	 * 
	 */
	private $detailModule;
	
	/**
	 * 
	 */
	private $packingList;
	
	/**
	 * 
	 */
	private $ltpic;
	
	public function getSupplierImg3Url() {
		return $this->supplierImg3Url;
	}
	
	public function setSupplierImg3Url($supplierImg3Url) {
		$this->supplierImg3Url = $supplierImg3Url;
		$this->apiParams["supplierImg3Url"] = $supplierImg3Url;
	}
	
	public function getCategoryCode() {
		return $this->categoryCode;
	}
	
	public function setCategoryCode($categoryCode) {
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}
	
	public function getSellPoint() {
		return $this->sellPoint;
	}
	
	public function setSellPoint($sellPoint) {
		$this->sellPoint = $sellPoint;
		$this->apiParams["sellPoint"] = $sellPoint;
	}
	
	public function getSupplierImg2Url() {
		return $this->supplierImg2Url;
	}
	
	public function setSupplierImg2Url($supplierImg2Url) {
		$this->supplierImg2Url = $supplierImg2Url;
		$this->apiParams["supplierImg2Url"] = $supplierImg2Url;
	}
	
	public function getSupplierImg5Url() {
		return $this->supplierImg5Url;
	}
	
	public function setSupplierImg5Url($supplierImg5Url) {
		$this->supplierImg5Url = $supplierImg5Url;
		$this->apiParams["supplierImg5Url"] = $supplierImg5Url;
	}
	
	public function getBarpic() {
		return $this->barpic;
	}
	
	public function setBarpic($barpic) {
		$this->barpic = $barpic;
		$this->apiParams["barpic"] = $barpic;
	}
	
	public function getCmTitle() {
		return $this->cmTitle;
	}
	
	public function setCmTitle($cmTitle) {
		$this->cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}
	
	public function getSupplierImg1Url() {
		return $this->supplierImg1Url;
	}
	
	public function setSupplierImg1Url($supplierImg1Url) {
		$this->supplierImg1Url = $supplierImg1Url;
		$this->apiParams["supplierImg1Url"] = $supplierImg1Url;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getSupplierImg4Url() {
		return $this->supplierImg4Url;
	}
	
	public function setSupplierImg4Url($supplierImg4Url) {
		$this->supplierImg4Url = $supplierImg4Url;
		$this->apiParams["supplierImg4Url"] = $supplierImg4Url;
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
	
	public function getIntroduction() {
		return $this->introduction;
	}
	
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
		$this->apiParams["introduction"] = $introduction;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
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
	
	public function getPars() {
		return $this->pars;
	}
	
	public function setPars($pars) {
		$this->pars = $pars;
		$arr = array();
		foreach ($pars as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["pars"] = $arr;
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
	
	public function getLtpic() {
		return $this->ltpic;
	}
	
	public function setLtpic($ltpic) {
		$this->ltpic = $ltpic;
		$this->apiParams["ltpic"] = $ltpic;
	}
	
	public function getApiMethodName(){
		return 'suning.saleoff.item.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
		RequestCheckUtil::checkNotNull($this->sellPoint, 'sellPoint');
		RequestCheckUtil::checkNotNull($this->supplierImg2Url, 'supplierImg2Url');
		RequestCheckUtil::checkNotNull($this->supplierImg5Url, 'supplierImg5Url');
		RequestCheckUtil::checkNotNull($this->cmTitle, 'cmTitle');
		RequestCheckUtil::checkNotNull($this->supplierImg1Url, 'supplierImg1Url');
		RequestCheckUtil::checkNotNull($this->supplierImg4Url, 'supplierImg4Url');
		RequestCheckUtil::checkNotNull($this->brandCode, 'brandCode');
		RequestCheckUtil::checkNotNull($this->productName, 'productName');
		RequestCheckUtil::checkNotNull($this->ltpic, 'ltpic');
	}
	
	public function getBizName(){
		return "addItem";
	}
	
}

class ParsX {

	private $apiParams = array();
	
	private $parValueX;
	
	private $parCodeX;
	
	public function getParValueX() {
		return $this->parValueX;
	}

	public function setParValueX($parValueX) {
		$this->parValueX = $parValueX;
		$this->apiParams["parValueX"] = $parValueX;
	}
	
	public function getParCodeX() {
		return $this->parCodeX;
	}

	public function setParCodeX($parCodeX) {
		$this->parCodeX = $parCodeX;
		$this->apiParams["parCodeX"] = $parCodeX;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class DetailModule {

	private $apiParams = array();
	
	private $num;
	
	private $moduleId;
	
	private $moduleName;
	
	private $type;
	
	private $content;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
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
	
	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getContent() {
		return $this->content;
	}

	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class PackingList {

	private $apiParams = array();
	
	private $packingListQty;
	
	private $packingListName;
	
	public function getPackingListQty() {
		return $this->packingListQty;
	}

	public function setPackingListQty($packingListQty) {
		$this->packingListQty = $packingListQty;
		$this->apiParams["packingListQty"] = $packingListQty;
	}
	
	public function getPackingListName() {
		return $this->packingListName;
	}

	public function setPackingListName($packingListName) {
		$this->packingListName = $packingListName;
		$this->apiParams["packingListName"] = $packingListName;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class Pars {

	private $apiParams = array();
	
	private $parCode;
	
	private $parValue;
	
	public function getParCode() {
		return $this->parCode;
	}

	public function setParCode($parCode) {
		$this->parCode = $parCode;
		$this->apiParams["parCode"] = $parCode;
	}
	
	public function getParValue() {
		return $this->parValue;
	}

	public function setParValue($parValue) {
		$this->parValue = $parValue;
		$this->apiParams["parValue"] = $parValue;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class ChildItem {

	private $apiParams = array();
	
	private $barpicX;
	
	private $supplierImgAUrl;
	
	private $barcode;
	
	private $itemCodeX;
	
	private $parsX;
	
	private $priceX;
	
	public function getBarpicX() {
		return $this->barpicX;
	}

	public function setBarpicX($barpicX) {
		$this->barpicX = $barpicX;
		$this->apiParams["barpicX"] = $barpicX;
	}
	
	public function getSupplierImgAUrl() {
		return $this->supplierImgAUrl;
	}

	public function setSupplierImgAUrl($supplierImgAUrl) {
		$this->supplierImgAUrl = $supplierImgAUrl;
		$this->apiParams["supplierImgAUrl"] = $supplierImgAUrl;
	}
	
	public function getBarcode() {
		return $this->barcode;
	}

	public function setBarcode($barcode) {
		$this->barcode = $barcode;
		$this->apiParams["barcode"] = $barcode;
	}
	
	public function getItemCodeX() {
		return $this->itemCodeX;
	}

	public function setItemCodeX($itemCodeX) {
		$this->itemCodeX = $itemCodeX;
		$this->apiParams["itemCodeX"] = $itemCodeX;
	}
	
	public function getParsX() {
		return $this->parsX;
	}

	public function setParsX($parsX) {
		$this->parsX = $parsX;
		$arr = array();
		foreach ($parsX as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["parsX"] = $arr;
	}
	
	public function getPriceX() {
		return $this->priceX;
	}

	public function setPriceX($priceX) {
		$this->priceX = $priceX;
		$this->apiParams["priceX"] = $priceX;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>