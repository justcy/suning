<?php
/**
 * 
 *
 * @author suning
 * @date   2018-3-23
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
$req = new itemContentsAddRequest();
//赋值……
$req->setAfterSaleServiceDec("7天内包退换");
$req->setAlertQty("5");
$req->setAssortCode("1");
$req->setAutoRefund("0");
$req->setBookingShop("0");
$childItem = new ChildItem();
$childItem->setAlertQty("5");
$childItem->setDeductiblePriceChild("1");
$childItem->setInvQty("5");
$childItem->setItemCode("561");
$childItem->setPingouPriceSub("20.00");
$childItem->setPrice("100.00");
$childItem->setProductCode("104007723");
$childItem->setSupplierImg1Url("http://1.jpg");
$req->setChildItem(array($childItem));
$req->setCmTitle("商品标题");
$req->setDeductiblePrice("1");
$detailModule = new DetailModule();
$detailModule->setContent("5aW95ZWG5ZOB");
$detailModule->setModuleId("1");
$detailModule->setModuleName("售后服务");
$detailModule->setNum("1");
$detailModule->setType("usr_mod");
$req->setDetailModule(array($detailModule));
$req->setEffectiveDay("99");
$req->setExtractMode("01,10");
$req->setInsaleRefund("0");
$req->setIntroduction("5aW95ZWG5ZOB");
$req->setInvQty("10");
$req->setItemCode("789123");
$listInfo = new ListInfo();
$listInfo->setNum("1");
$listInfo->setPic("http://1.jpg");
$listInfo->setText("1");
$mobile = new Mobile();
$mobile->setListInfo(array($listInfo));
$mobile->setSummary("1");
$req->setMobile($mobile);
$module = new Module();
$module->setCouponId("1");
$module->setImgUrl("http://1.jpg");
$module->setModuleName("售后服务");
$module->setModuleStatus("1");
$module->setTuijianId("1");
$mobileNew = new MobileNew();
$mobileNew->setModule(array($module));
$req->setMobileNew($mobileNew);
$packingList = new PackingList();
$packingList->setPackingListName("装箱清单名称");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$req->setPayTemplate("1");
$req->setPeopleNum("2");
$req->setPingouPrice("20.00");
$req->setPrice("5.00");
$req->setPriceType("01");
$req->setProductCode("102652866");
$req->setSaleDate("2013-09-15");
$req->setSaleSet("0");
$req->setSellChannel("01");
$req->setSellPoint("商品卖点");
$req->setSourceCountry("CN");
$req->setSupplierImg10Url("http://1.jpg...");
$req->setSupplierImg1Url("http://1.jpg...");
$req->setSupplierImg2Url("http://1.jpg...");
$req->setSupplierImg3Url("http://1.jpg...");
$req->setSupplierImg4Url("http://1.jpg...");
$req->setSupplierImg5Url("http://1.jpg...");
$req->setSupplierImg6Url("http://1.jpg...");
$req->setSupplierImg7Url("http://1.jpg...");
$req->setSupplierImg8Url("http://1.jpg...");
$req->setSupplierImg9Url("http://1.jpg...");
$req->setWhiteBackgroundPic("白底图");
$req->setWriteoffPayment("0");
$req->setWriteoffShop("1");

//api入参校验逻辑开关，当测试稳定之后建议设置为 false 或者删除该行
$req -> setCheckParam('true');
$serverUrl = "http://openpre.cnsuning.com/api/http/sopRequest";
$appKey = "a13b8bd0efb06a770c57d1c370ce8ee7";
$appSecret = "f08ce9836c4bcfc708194594081f6690";
$client = new DefaultSuningClient($serverUrl,$appKey,$appSecret,'json');
$resp = $client -> execute($req);
$reqJson = getReqJson($req);
print_r("请求报文:\n".$reqJson);
print_r("\n返回响应报文:\n".$resp);

function getReqJson($req){
	$paramsArray = $req -> getApiParams();
	if(empty($paramsArray)){
		$paramsArray = '';
	}
	$paramsArray = array('sn_request' => array('sn_body' => array(
		"{$req -> getBizName()}" => $paramsArray
	)));
	return json_encode($paramsArray);
}
?>