<?php
/**
 * 
 *
 * @author suning
 * @date   2017-3-8
 */
// 引入主文件
require_once(dirname(__FILE__).'/../../SuningSdk.php');
require_once(dirname(__FILE__).'/../../DefaultSuningClient.php');
require_once(dirname(__FILE__).'/../../request/fourps/ExpressorderAddRequest.php');
$req = new ExpressorderAddRequest();
//赋值……
$req->setExpressCompCode("SN2");
$req->setMarketingProduct("10");
$req->setOrderSource("201");
$packageList = new PackageList();
$packageList->setAgentAmount("1253.33");
$packageList->setAgentOption("02");
$packageList->setCarFlag("0");
$packageList->setDstributeAndInstall("0");
$packageList->setExpressNo("6258986525522");
$packageList->setFullCarType("T180");
$packageList->setGoodsQty("3");
$packageList->setInsyredValue("15000");
$packageList->setOutOrderNum("25845632555555");
$packageList->setPackageComment("备注");
$packageList->setPackageHeight("64");
$packageList->setPackageLength("22");
$packageList->setPackageName("手机");
$packageList->setPackageNo("1");
$packageList->setPackageVolume("3333333");
$packageList->setPackageWeight("3");
$packageList->setPackageWidth("64");
$packageList->setPacking("1");
$packageList->setPickupMode("01");
$packageList->setSelfFeedingPoint("L025");
$packageList->setServiceMode("01");
$packageList->setSignReturn("1");
$packageList->setSpecialCarType("空");
$packageList->setTransportType("01");
$req->setPackageList(array($packageList));
$req->setReceiverAddressDetail("仙女路");
$req->setReceiverCity("扬州市");
$req->setReceiverCompany("苏宁易购");
$req->setReceiverDistrict("江都区");
$req->setReceiverMobile("13802520698");
$req->setReceiverName("李四");
$req->setReceiverProvince("江苏省");
$req->setReceiverTel("025-66996699");
$req->setReceiverTown("全区");
$req->setSenderAddressDetail("文苑路南京财经大学");
$req->setSenderCity("南京市");
$req->setSenderCompany("苏宁云商有限公司");
$req->setSenderDistrict("栖霞区");
$req->setSenderMobile("13802356421");
$req->setSenderName("张山");
$req->setSenderProvince("江苏省");
$req->setSenderTel("025-66996699");
$req->setSenderTown("全区");
$req->setUuid("2564EDSF1287RFDROPIG4567IUYT2594IJHG");

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