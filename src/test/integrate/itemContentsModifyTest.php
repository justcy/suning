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
$req = new itemContentsModifyRequest();
//赋值……
$req->setAfterSaleServiceDec("一年内包退换");
$req->setAssortCode("11111111");
$childItem = new ChildItem();
$childItem->setItemCode("11");
$childItem->setProductCode("11000000002");
$childItem->setSupplierImg1Url("http://1.jpg...");
$req->setChildItem(array($childItem));
$req->setCmTitle("商品标题");
$detailModule = new DetailModule();
$detailModule->setContent("5aW95ZWG5ZOB");
$detailModule->setModuleId("1");
$detailModule->setModuleName("售后服务");
$detailModule->setNum("1");
$detailModule->setType("usr_mod");
$req->setDetailModule(array($detailModule));
$req->setIntroduction("5aW95ZWG5ZOB");
$req->setItemCode("naikeabc");
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
$module->setModuleStatus("0");
$module->setTuijianId("1");
$mobileNew = new MobileNew();
$mobileNew->setModule(array($module));
$req->setMobileNew($mobileNew);
$packingList = new PackingList();
$packingList->setPackingListName("装箱清单名称");
$packingList->setPackingListQty("1");
$req->setPackingList(array($packingList));
$req->setPeopleNum("5");
$req->setProductCode("1000000001");
$req->setSaleDate("2013-10-1");
$req->setSaleSet("0");
$req->setSellPoint("好东西");
$req->setSourceCountry("11111111");
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